<?php
	session_start();

	include("koneksi.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($kon, $query);
			
			if ($result){
				if ($result && mysqli_num_rows($result)>0){
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password){
						
						$_SESSION['user_id'] = $user_data['user_id'];
						header("location: index.php");
						die;
					}
				}
			}
			} else
			{
				echo "Wrong username or password.";
			}	
		
		if(isset($_SESSION['username'])){
			header("location: index.php");
			die;
		}
	}
?>

<!doctype html>
<html lang="en">
    <head>
      
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="./upload/logo/logo_sb.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

		<script src='script.js'></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
        <title>Login</title>
    </head>
	
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <div class="container-fluid">
			<img src="logo.png" height="80px" class="mr-3" alt="Shadowverse Card Catalogue">
			<a class="navbar-brand" href="#"> <h3>Shadowverse Card Catalogue </h3> </a>
				<div class="navbar-brand" href="#">
					<h3>Login</h3>
				</div>
            </div>
        </nav>

		<div id="loginform">
			<form method="post" class="col g-3">
				<div class="col-12 mb-3">
					<h2><b>Login</b></h2>
				</div>

				<div class="form-floating col-12 mb-3">
					<input class="form-control" id="floatingInput" required autocomplete="off" name="username" type="text" placeholder="Username">
					<label for="floatingInput">Username</label>
				</div>

				<div class="form-floating col-12 mb-3">
					<input class="form-control" id="formInputPassword" required autocomplete="off" name="password" type="password" placeholder="Password">
					<label for="formInputPassword">Password</label>
				</div>

				<div class="col-12 mb-3">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="showpassCheck" onclick="showpass()">
						<label class="form-check-label" for="showpassCheck">
						Show Password</label>
					</div>
				</div>

				<div class="d-grid col-12 mb-5">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>

				<div class="col-12 mb-3">
					<div class="signup">
						<p><a href="signup.php">Have not signed up yet?</a></p>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
