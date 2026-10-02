<?php
	$hostname = "localhost";
	$user = "root";
	$pass = '';
	$dbname = 'shopping';
	
	$conn = mysqli_connect($hostname, $user, $pass, $dbname);
	
	if($conn){
		
		echo 'connection done';
	}else{
		
		echo 'something went wrong';
	}
?>