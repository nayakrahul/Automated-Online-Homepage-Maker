<html>
<body>
<?php

 function doit()
{

$string= $_POST['sem1'];
$array=explode(",",$string);
$replacement="<p>";
foreach($array as $value)
	$replacement = $replacement.$value."<br>";
$replacement=$replacement."</p>";	
$search = "<!--sem1-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/about.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/about.html', $contents);

$string= $_POST['sem2'];
$array=explode(",",$string);
$replacement="<p>";
foreach($array as $value)
	$replacement = $replacement.$value."<br>";
$replacement=$replacement."</p>";	
$search = "<!--sem2-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/about.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/about.html', $contents);


$string= $_POST['sem3'];
$array=explode(",",$string);
$replacement="<p>";
foreach($array as $value)
	$replacement = $replacement.$value."<br>";
$replacement=$replacement."</p>";	
$search = "<!--sem3-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/about.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/about.html', $contents);

$string= $_POST['sem4'];
$array=explode(",",$string);
$replacement="<p>";
foreach($array as $value)
	$replacement = $replacement.$value."<br>";
$replacement=$replacement."</p>";	
$search = "<!--sem4-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/about.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/about.html', $contents);
header('Location: courses.html');


                
$string = trim(preg_replace('/\s\s+/', ' ', $_POST['percent1']));
$replacement = "<div class=\"progress-bar progress-bar\" style=\"width: ".$string."%\">";
$search = "<!--per1-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/about.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/about.html', $contents);

$string = trim(preg_replace('/\s\s+/', ' ', $_POST['percent2']));
$replacement = "<div class=\"progress-bar progress-bar\" style=\"width: ".$string."%\">";
$search = "<!--per2-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/about.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/about.html', $contents);

$string = trim(preg_replace('/\s\s+/', ' ', $_POST['percent3']));
$replacement = "<div class=\"progress-bar progress-bar\" style=\"width: ".$string."%\">";
$search = "<!--per3-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/about.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/about.html', $contents);

$string = trim(preg_replace('/\s\s+/', ' ', $_POST['streak']));
$replacement = "<p>".$string."</p>";
$search = "<!--streak-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/about.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/about.html', $contents);


header('Location: academic.html');


 }
 
if(isset($_POST['submit']))
{

	doit();
	
}
?>
</body>
</html>