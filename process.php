 <html>
<head>
<?php


 function doit()
{
$string=$_POST['name'];
$array=explode(" ",$string);
$replacement="<a class=\"navbar-brand\" href=\"./index.html\">".$array[0]."</a>";
$search = "<!--home-->"; // sample value squeeze it on this line
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

$specific_line=1;
$contents = file('temp/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/index.html', $contents);

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

$specific_line=1;
$contents = file('temp/contact.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/contact.html', $contents);



$string = trim(preg_replace('/\s\s+/', ' ', $_POST['name']));
$array=explode(" ",$string);
$replacement = "<h1>About ".$array[0]." !</h1>";
$search = "<!--name-->"; // sample value squeeze it on this line
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

$string = trim(preg_replace('/\s\s+/', ' ', $_POST['name']));
$replacement = "<h1>I am ".$string."</h1>";
$search = "<!--name-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/index.html', $contents);

$string = trim(preg_replace('/\s\s+/', ' ', $_POST['fb']));
$replacement = "<a href=\"".$string."\"><i class=\"fa fa-facebook-square fa-3x\"></i></a>";
$search = "<!--fb-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/index.html', $contents);


$string = trim(preg_replace('/\s\s+/', ' ', $_POST['twit']));
$replacement = "<a href=\"".$string."\"><i class=\"fa fa-twitter-square fa-3x\"></i></a>";
$search = "<!--tweet-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/index.html', $contents);


$string = trim(preg_replace('/\s\s+/', ' ', $_POST['linked']));
$replacement = "<a href=\"".$string."\"><i class=\"fa fa-linkedin-square fa-3x\"></i></a>";
$search = "<!--linked-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/index.html', $contents);

$string = trim(preg_replace('/\s\s+/', ' ', $_POST['desc']));
$replacement = "<p>".$string."</p>";
$search = "<!--desc-->"; // sample value squeeze it on this line
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

$string= $_POST['addr'];
$array=explode("\n",$string);
$replacement="<p>";
foreach($array as $value)
	$replacement = $replacement.$value."<br>";
$replacement=$replacement."</p>";	
$search = "<!--addr-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/contact.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/contact.html', $contents);

$string= $_POST['phone'];
$replacement = "<p>".$string."</p>";
$search = "<!--phone-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/contact.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/contact.html', $contents);

$string= $_POST['email'];
$replacement = "<p>".$string."</p>";
$search = "<!--email-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/contact.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/contact.html', $contents);

$string= $_POST['college'];
$replacement = "<br>".$string."</p>";
$search = "<!--college-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/index.html', $contents);

$string= $_POST['dep'];
$replacement = "<p class=\"lead\">".$string;
$search = "<!--dep-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/index.html', $contents);

$string= $_FILES["file"]["name"];
$replacement = "<img src=\"".$string."\" height=\"40%\" width=\"20%\" alt=\"...\" class=\"img-circle\">";
$search = "<!--image-->"; // sample value squeeze it on this line
$specific_line=1;
$contents = file('temp/index.html', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach($contents as $line){
$line = trim(preg_replace('/\s\s+/', ' ', $line));
if(strcmp($line,$search)==0){break;}
else{$specific_line=$specific_line+1;}
}
array_splice($contents, $specific_line-1, 0, array($replacement)); // arrays start at zero index
$contents = implode("\n", $contents);
file_put_contents('temp/index.html', $contents);


header('Location: courses.html');







                 



 }
 
 
 



if(isset($_POST['submit']))
{
		
	
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "temp/" .$_FILES["file"]["name"]);
	doit();
	
}
?>
</body>
</html>