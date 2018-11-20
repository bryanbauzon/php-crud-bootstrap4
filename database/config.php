<?php
	$conn = mysqli_connect('localhost','root','','movie');
	if(!$conn){
		echo $conn->connect_error;
	}