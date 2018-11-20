<?php	
//isset is for validation 
//Know the difference between POST and GET
	if(isset($_GET['id'])){
		//database connection
		include '../database/config.php';
		//getting id from url passed by index.php
		$id = $_GET['id'];
		//setting up the query 
		$query = "DELETE FROM tblmovie WHERE id = '$id'";
		//if the exeecution is successfull, it will redirect to index.php
		if($conn->query($query)){
			header('Location: ../index.php');
		}else{
			echo "error";
		}

	}