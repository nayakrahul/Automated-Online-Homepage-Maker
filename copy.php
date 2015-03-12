
<html>
<body>
<?php

function recurse_copy($src,$dst) {
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir);
}

 function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
            Delete(realpath($path) . '/' . $file);
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}
if(isset($_POST['submit']))
{
		if(file_exists('download.zip'))
		unlink('download.zip');
		
	if(file_exists('temp'))
		Delete(temp);
	mkdir('temp', 0777, true);
	
     $option=$_POST['option'];
	 if($option=='sandstone')
		$source='template/Sandstone/';
	if($option=='darkly')
		$source='template/Darkly/';
	if($option=='united')
		$source='template/United/';
		if($option=='journal')
		$source='template/Journal/';
		if($option=='slate')
		$source='template/Slate/';
		
	$target='temp';
	recurse_copy($source,$target);
	header('Location: about.html');
	
	
}
?>
</body>
</html>
