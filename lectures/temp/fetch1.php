<?php
include('connection.php');

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
		</title>
		<style>
			table,tr,th,td{
				border:1px solid red;
			}
		</style>
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM `student`";
			$result = mysqli_query($conn, $sql);
			/*if(mysqli_num_rows($sql) > 0){
				while($data = mysqli_fetch_Assoc($sql)){
					
					echo $data['id'];
					echo '<br>';
					echo $data['name'];
					echo '<br>';
					echo $data['username'];
					echo '<br>';
				}
			}
			*/
		?>
		<table style="width: 50%; border-collapse: collapse;">
			<tr>
				<th>
					name
				</th>
				<th>
					username
				</th>
				<th>
					roll no
				</th>
			</tr>
			
			
			<?php
				if(mysqli_num_rows($result) > 0){
					while($data = mysqli_fetch_assoc($result)){
			?>	
			<tr>
				<td style= "padding-left:5%; "> <?php echo $data['name']; ?></td>
				<td style= "padding-left:5%; "> <?php echo $data['username']; ?></td>
				<td style= "padding-left:5%; "> <?php echo $data['roll_no']; ?></td>
				<td style= "padding-left:5%; "> <button> <a href="updatepage.php">update</a> </button> <?php  ?></td>
			</tr>
			<?php
					}
				}
				
				
			?>
			
		</table>
	</body>
</html>