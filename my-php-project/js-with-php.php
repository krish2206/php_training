<?php
	require('config.php');
	echo '
		<script>
			var a = "welcome to php";
			console.log(a);
		</script>
	';
	
	echo '<p style="color:red; font-size:30px;">hi</p>';
	
	$sql = "INSERT INTO `users`(`username`, `email`, `password_hash`, `role`, `is_active`) VALUES ('krishna','krishna@gmail.com','mypass','user','true')";
	$sql = mysqli_query($conn, $sql);
	if($sql){
		echo 'data inserted successfully';
		
	}else{	
		echo 'sql error';
	}
?>