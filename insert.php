<?php 

	require "database.php";

	$name = $_POST['yourname'];
	$title = $_POST['title'];
	$language = $_POST['language'];
	$code = $_POST['code'];

	$database = new Database;
	$database->insertFunction($name,$language,$title,$code);

	$id = $database->getId();

	header('Location: http://localhost/codepastegin/getcode.php?id='.$id);


?>