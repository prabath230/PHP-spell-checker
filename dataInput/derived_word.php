<?php
require_once 'connection/conn.php';
 
$swod=$_POST['word1'];
$root=$_POST['word2'];
$language=$_POST['word3'];

if (!$con->set_charset("utf8")) {
                  printf("Error loading character set utf8: %s\n", $con->error);
   } else {
}

if ($con->connect_error) 
	{
    die("Connection failed: " . $con->connect_error);
	}
	
$sql ="INSERT INTO words(word,root,language)
		        VALUES ('$swod','$root','$language')";

/*window.alert('Success');*/	
if ($con->query($sql) === TRUE) 
	{
		echo ("<script language = 'javascript'>
				window.location.href='index.php' </script>");
				exit();
    
	} 
	else {
    echo ("<script language = 'javascript'>
				window.alert('Already exists')
				window.location.href='index.php' </script>");
				exit();	
			}
	$con->close();

?>
