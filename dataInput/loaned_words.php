<?php
require_once 'connection/conn.php';

$swod=$_POST['word1'];
$language=$_POST['word2'];

if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $con->error);
   } else {
}

if ($con->connect_error) 
	{
    die("Connection failed: " . $con->connect_error);
	}
	
$sql ="INSERT INTO words(word,language)
		        VALUES ('$swod','$language')";

				
if ($con->query($sql) === TRUE) 
	{
		echo ("<script language = 'javascript'>
				window.location.href='loaned.php' </script>");
				exit();
    
	} 
	else {
    echo ("<script language = 'javascript'>
				window.alert('Already exists')
				window.location.href='loaned.php' </script>");
				exit();	
			}
	
	$con->close();

?>