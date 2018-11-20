<?php
		//database connection
	include '../database/config.php';

	//getting all the data passed from index.php
	//use ltrim, rtrim for validation
	$title = ltrim(rtrim($_POST['title']));
	$remarks = ltrim(rtrim($_POST['remarks']));

	//setting up the query
	$query = "INSERT INTO tblmovie(title,remarks) VALUES('$title','$remarks')";
	//test if successfully executed
	if($conn->query($query)){
		//header means redirect.
		header('Location: ../index.php');
	}else{
		//error
		echo "error";
	}  