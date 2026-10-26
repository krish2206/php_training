<?php 
	include('connection.php');
	include('fetch1.php'); 
?>	
<!DOCTYPE HTML>
<HTML>
	<HEAD>
	</HEAD>
	<script>
		
	
	</script>
	
	<BODY>
	
	<?php 
		if(mysqli_num_rows($search) = $id){
					while($data = mysqli_fetch_assoc($result)){
	
	?>
		<form>
			<label>Name </label>
			<input type="text" value="<?php echo $data['name'];?>"></input>
		
			<label> Username </label>
			<input type="text" value="<?php echo $data['username'];?>" </input>
			
			<button type="submit" name="save">Update</button>
			
		</form>
		
	<?php
					}
		}
	?>
	</BODY>



</HTML>