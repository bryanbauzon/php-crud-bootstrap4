<?php
		//connection of the database
		include '../database/config.php';
		$id = $_POST['idHolder'];
		//getting all the values passed by edit.php
		$title = $_POST['title'];
		$remarks = $_POST['remarks'];
		//setting up the query. 
		$query = "UPDATE tblmovie SET title = '$title',
										remarks = '$remarks' WHERE id = '$id'";
		//if the query is successfully executed it will redirect to index.php which is the main home
		if($conn->query($query)){
			//echo "success";
			header('Location: ../index.php');
		}else{
			//if not it will print an error message
			echo "Error";
		}										