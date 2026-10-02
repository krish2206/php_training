<?php
	echo '<p style="color:red; font-size:30px; text-align:center;">hello i am krish</p>';
	
	$name = "abc";
	function myFun($a){
		if($a == 'abc'){
			echo $a.'my function starts';
		}
	}
	
	for($a = 0; $a < 10; $a++){
		echo "<p style='color:red; font-size:30px;'>".$a."</p>";
		
	}
	$p = 0;
	while($p < 10){
		$p++;
		echo $p;
	}
	
	myFun($name);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			my php lecture
		</title>
	</head>
	<body>
		<?php
			$name = 'krish';
			$lastname = 'makariye';
		?>
		hi <?php echo $name." ".$lastname; echo '<script>alert("5")</script>'; ?>
		
		<?php 
			$num1= 12;
			$num2= 13;
			 
			echo "number one is: ".$num1. "	number two is: ". $num2;
		?>
	</body>
</html>