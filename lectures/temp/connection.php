<?php
	$hostname ='localhost'; 
	$username ='root';
	$pass ='';
	$dbname='student';
	
	$conn = mysqli_connect($hostname, $username, $pass, $dbname);
	
	if($conn){
			echo "database connected.";
	}else{
		echo 'error';
	}	

?>