<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <div class="container-fluid">
			<img src="logo.png" height="80px" class="mr-3" alt="Shadowverse Card Catalogue">
			<a class="navbar-brand" href="#"> <h3>Shadowverse Card Catalogue </h3> </a>
				<div class="navbar-brand" href="#">
					<h3>Edit Data</h3>
				</div>
            </div>
    </nav>
	<div id="loginform">
		<a href="index.php">Lihat Semua Data</a>
	</div>
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = "SELECT * FROM rank WHERE id='$id'";
	mysqli_query($kon,$query_mysql)or die(mysql_error());
	$result = mysqli_query($kon,$query_mysql);
	while($data = mysqli_fetch_array($result)){
	?>
	<form action="update.php" method="post">	
		<table>
				<tr>
					<td>Name</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="text" name="name" value="<?php echo $data['name'] ?>">
					</td>					
				</tr>	
				<tr>
					<td>Rank</td>
					<td><input type="text" name="rank" value="<?php echo $data['rank'] ?>"></td>					
				</tr>	
				<tr>
					<td></td>
					<td><input type="submit" value="Save"></td>					
				</tr>
		</table>
	</form>

	<?php } ?>
</body>
</html>