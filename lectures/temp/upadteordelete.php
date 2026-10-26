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
			$sql = mysqli_query($conn, $sql);
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
			
			function updatedata(){
					if(mysqli_num_rows($sql) > 0){
						while($data = mysqli_fetch_assoc($sql)){
					
						}
					}
					
					
					
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
				<th>
					update
				</th>
				<th>
					delete
				</th>
			</tr>
			
			
			<?php
				if(mysqli_num_rows($sql) > 0){
					while($data = mysqli_fetch_assoc($sql)){
			?>
			<tr>
				<td style= "padding-left:5%; "> <?php echo $data['name']; ?></td>
				<td style= "padding-left:5%; "> <?php echo $data['username']; ?></td>
				<td style= "padding-left:5%; "> <?php echo $data['roll_no']; ?></td>
				<td style= "padding-left:5%; "> <button onclick="window.location.href='updatepage.php';"></button></td>				
			</tr>
			<?php
					}
				}
			?>
			
		</table>
	</body>
</html>