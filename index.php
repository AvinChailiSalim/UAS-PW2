<?php
	session_start();
	
	include("koneksi.php");
	include("functions.php");
	
	$user_data = check_login($kon);
?>
<html>
	<head>
		<title> Shadowverse Card Catalogue </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		
		<!-- navbar start-->
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <div class="container-fluid">
			<img src="logo.png" height="80px" class="mr-3">
			<a class="navbar-brand" href="#"> <h3>Shadowverse Card Catalogue </h3> </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#cardtypes">Card Types</a>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Fast Access
				  </a>
				  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#meta-comp">Meta Decks Compilation</a></li>
					<li><a class="dropdown-item" href="#meta-obv">Recent Meta Observation</a></li>
					<li><a class="dropdown-item" href="#calc">Legend Pull Calc</a></li>
					<li><a class="dropdown-item" href="#copyright">Copyright</a></li>
					</ul>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="logout.php" tabindex="-1"> Logout</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> Alpha Ver. 0.1</a>
				</li>
			  </ul>
			  <form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Search</button>
			  </form>
			</div>
		  </div>
		</nav>
		<!--navbar end-->
		
		<!--carousel start-->
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <style>
	
		  </style>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="1.png" class="d-block w-100" alt="...">
			  <div class="carousel-caption font-weight-bold">
				<h5>Darkness Over Vellsar</h5>
				<p>Vellsar, a world of darkness. Where ghosts, dragonewts, vampires, and mythical beasts fights for the top.</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="2.png" class="d-block w-100" alt="...">
			   <div class="carousel-caption font-weight-bold">
				<h5>Eternal Awakening</h5>
				<p>The Eternals, strongest skyfarer crew has arrived! Challenge them for the title of Conqueror of Eternals!</p>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="3.png" class="d-block w-100" alt="...">
			   <div class="carousel-caption font-weight-bold">
				<h5>Storm Over Rivayle</h5>
				<p>Rivayle's a pretty nasty world. Hope ya ready for the blast.</p>
			  </div>
			</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
		<!--carousel end-->
		
		<!--jumbotron start-->
		<div class="container text-light" >
			<div class="p-5 rounded-lg m-3" id="cardtypes">
			  <h1 class="display-4"> Welcome! </h1>
			  <p class="lead">Shadowverse Card Catalogue is a website created to guide newer players upon the seemingly convoluted gameplay of Shadowverse.
			  We wish to make a more condensed and understandable guide for a better gameplay experience.</p>
			<table class="table text-light">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Card Types</th>
				  <th scope="col">Explanation</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">1</th>
				  <td>Follower</td>
				  <td>Followers are the 'monster' in this game. They are the cards that has attack and defense to fight, along with their own special effects.</td>
				</tr>
				<tr>
				  <th scope="row">2</th>
				  <td>Spell</td>
				  <td>Spells are single-use cards that will disappear once their effect actives. Use them at the right time for devastating results.</td>
				</tr>
				<tr>
				  <th scope="row">3</th>
				  <td>Amulet</td>
				  <td>Amulet are cards that exist in your board but can't be used to attack nor defense like Followers. They stay persistent on board for continous effect.</td>
				</tr>
			  </tbody>
			</table>
			</div>
		</div>
		<!--jumbotron end-->
		
		<!--card begin-->
		<div class="container-fluid mt-5" id="meta-comp"> </div>
		<div class="row height-50% width-50%"> 
			<div class="col-lg-3 col-md-4">
			<div class="card"">
			<img src="4.png" class="card-img-top" alt="...">		
			  <div class="card-body">
				<h5 class="card-title">Vellsar Meta Decks</h5>
				<p class="card-text">See which deck is meta during Darkness Over Vellsar.</p>
				<a href="#" class="btn btn-primary">Go</a>
			  </div>
			</div>
			</div>
			<div class="col-lg-3 col-md-4">	
			<div class="card">
				<img src="5.png" class="card-img-top" alt="...">		
			  <div class="card-body">
				<h5 class="card-title">Eternal Meta Decks</h5>
				<p class="card-text">See which deck is meta during Eternal Awakening.</p>
				<a href="#" class="btn btn-primary">Go</a>
			  </div>
			</div>
			</div>
			<div class="col-lg-3 col-md-4">
			<div class="card">
			  <img src="6.png" class="card-img-top" alt="...">		
				<div class="card-body">
				<h5 class="card-title">Rivayle Meta Decks</h5>
				<p class="card-text">See which deck is meta during Storm Over Rivayle.</p>
				<a href="#" class="btn btn-primary">Go</a>
				</div>
			</div>
			</div>
			<div class="col-lg-3 col-md-4">
			<div class="card"">
			  <img src="7.png" class="card-img-top" alt="...">		
				<div class="card-body">
				<h5 class="card-title">Fortune Meta Decks</h5>
				<p class="card-text">See which deck is meta during Fortune's Hand.</p>
				<a href="#" class="btn btn-primary">Go</a>
				</div>
			</div>
			</div>
		</div>
		</div>
		<!--card end-->
		
		<!--embed begin-->
		<style>
		.embed-responsive-item
		{
			height: 80%;
			width:80%;
			transform:translate(15%,0);
		}
		</style>
		<div class="embed-responsive embed-responsive-4by3 mt-5" id="meta-obv">
		  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/441kyud4-I4" title="YouTube video" allowfullscreen></iframe>
		</div>
		<!--embed end-->
		<br/>
 
		<?php 
		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
			if($pesan == "input"){
				echo "Data created.";
			}else if($pesan == "update"){
				echo "Data updated.";
			}else if($pesan == "hapus"){
				echo "Data deleted.";
			}
		}
		?>
		<br/>
		<a class="tombol" href="input.php">+ Create New Data</a>
		<h3>Data user</h3>
		<table border="1" class="table">
			<tr class="rank">
				<th>No. </th>
				<th>Name</th>
				<th>Rank</th>	
				<th>Options</th>
			</tr>
			<?php 
			include "koneksi.php";
			$query_mysql = mysqli_query($kon,"SELECT * FROM rank")or die(mysql_error());
			$nomor = 1;
			while($data = mysqli_fetch_array($query_mysql)){
			?>
			<tr class="rank">
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['rank']; ?></td>
				<td>
					<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
					<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Delete</a>					
				</td>
			</tr>
			<?php } ?>
		</table>
		
		<!--Calc start-->
		<div class="text-white text-center">
			<h2> Legend Card Estimation Calculator </h2>
			<h3>The amount of Rupies you will spend: </h3>
			<input id="rupies"> <br />
			<h3>The amount of packs you will spend: </h3>
			<input id="packs"> <br />
			<button id="count" onclick="calc()">Count!</button>
			<h3 id="result" class="text-white"></h3>
		<!--Calc end-->
		
		<!--footer start-->
    <div class="footer">
        <footer>
            <div class="container p-4 text-center">
                <div class="row">

                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <div class="mb-0" id="foot-logo">
                            <div class="logo-nb">
                                <div class="fcl-bg">
                                    <a href="#"><img src="logo.png" alt="Shadowverse Card Catalogue"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-copyright">
                    <div class="f-cr">
                    Copyright &copy;2021 Shadowverse is created by @Cygames. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
    </div>
		<!--footer end-->
	</body>
</html> 

	<script>		
		function calc(){
			var rupies = parseInt(document.getElementById("rupies").value);
			var packs = parseInt(document.getElementById("packs").value);
			var x,y,packs;
			x = rupies/100;
			x = Math.floor(x);		
			console.log(x);
			console.log(packs);
			y = (x+packs)*8*1.5/100;
			console.log(y);
			y = Math.floor(y);
			
			document.getElementById("result").innerHTML = y;
		}
		
	</script>
