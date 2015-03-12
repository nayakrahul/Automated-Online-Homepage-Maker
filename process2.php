<html>
<body>
<?php

 function doit()
{
$string =  $_POST['pro1'];
$replacement = "<h3 class=\"panel-title\" align=\"center\">".$string."</h3>";
$search = "<!--pro1-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/work.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/work.html', $contents);

$string = $_POST['prod1'];
$replacement = $string;
$search = "<!--content1-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/work.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/work.html', $contents);

$string =  $_POST['pro2'];
$replacement = "<h3 class=\"panel-title\" align=\"center\">".$string."</h3>";
$search = "<!--pro2-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/work.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/work.html', $contents);

$string = $_POST['prod2'];
$replacement = $string;
$search = "<!--content2-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/work.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/work.html', $contents);

$string =  $_POST['pro3'];
$replacement = "<h3 class=\"panel-title\" align=\"center\">".$string."</h3>";
$search = "<!--pro3-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/work.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/work.html', $contents);

$string = $_POST['prod3'];
$replacement = $string;
$search = "<!--content3-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/work.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/work.html', $contents);

$string =  $_POST['pro4'];
$replacement = "<h3 class=\"panel-title\" align=\"center\">".$string."</h3>";
$search = "<!--pro4-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/work.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/work.html', $contents);

$string = $_POST['prod4'];
$replacement = $string;
$search = "<!--content4-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/work.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/work.html', $contents);


Zip('temp/', 'download.zip',true);

 }
 function Zip($source, $destination, $include_dir = false)
{


    if (!extension_loaded('zip') || !file_exists($source)) {
        return false;
    }

    if (file_exists($destination)) {
        unlink ($destination);
    }

    $zip = new ZipArchive();
    if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
        return false;
    }

    $source = realpath($source);

    if (is_dir($source) === true)
    {

        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

        if ($include_dir) {

            $arr = explode(DIRECTORY_SEPARATOR, $source);
            $maindir = $arr[count($arr)- 1];

            $source = "";
            for ($i=0; $i < count($arr) - 1; $i++) {
                $source .= DIRECTORY_SEPARATOR . $arr[$i];
            }

            $source = substr($source, 1);

            $zip->addEmptyDir($maindir);

        }

        foreach ($files as $file)
        {
            // Ignore "." and ".." folders
            if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
                continue;

            $file = realpath($file);

            if (is_dir($file) === true)
            {
                $zip->addEmptyDir(str_replace($source . DIRECTORY_SEPARATOR, '', $file . DIRECTORY_SEPARATOR));
            }
            else if (is_file($file) === true)
            {
                $zip->addFromString(str_replace($source . DIRECTORY_SEPARATOR, '', $file), file_get_contents($file));
            }
        }
    }
    else if (is_file($source) === true)
    {
        $zip->addFromString(basename($source), file_get_contents($source));
    }

    $zip->close();
	
}
if(isset($_POST['submit']))
{
	
	doit();
	
	header('Location: finish.html');
}
?>
</body>
</html>