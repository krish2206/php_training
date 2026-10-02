<?php
include('connection.php');


if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$rollno = $_POST['rollno'];
		$sql = "INSERT INTO `student`(`name`, `username`, `roll_no`) VALUES ('$name','$username','$rollno')";
		$sql = mysqli_query($conn, $sql);
		
		if($sql){
			echo'succesfully executed query';
		}else{
			echo "error";
		}
	}
?>