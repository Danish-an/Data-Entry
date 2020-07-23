<?php
include "includes/db.php";

if(!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/homestyle.css">
	   <script src="js/jQuery.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	    <script src="js/all.min.js"></script>

<style>
	body{
		background:#0F0E17;
	}
</style>
</head>
<body>
<section id="header">
		

	
    <div class="container-fluid">
	<nav class="navbar navbar-expand-sm fixed-top navbar-light">
		<div class="container">
        <a class="navbar-brand" href="home.php">Brand</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" href="logout.php">Past Entry</a>
		  </li>
		   <li class="nav-item">
			<a class="nav-link" href="logout.php">Log out</a>
		  </li>
		</ul>
	  </div>
	  

			</div>
		</nav>		
</section>
<section id="data">
<div class="container my-3">
<br>
<br>

<p class="h5" >HISTORY</p>

		<br>
		<div class="row justify-content-centre">
		
			<div class="col-sm-12 ">
			
				 <div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
							  <th scope="col">Id</th>
							  <th scope="col">Name</th>
							  <th scope="col">No of People</th>
							  <th scope="col">Date</th>
							  <th scope="col">Timing</th>
							  <th scope="col">Edit</th>
							  <th scope="col">Delete</th>
							</tr>
						</thead>
						<tbody>
						   <?php 
						   
						   
						   $query = "SELECT * FROM history";
						   $selectResult = mysqli_query($connection, $query);
						   $res = mysqli_num_rows($selectResult);
						    if(!$selectResult){
								die("FAILED");
							}
							while($row = mysqli_fetch_array($selectResult)){
							?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['peoples']; ?></td>
									<td><?php echo $row['timing']; ?></td>
									<td><?php echo $row['date']; ?></td>
									<td><a href="update.php?edit=<?php echo $row['id']; ?> " data-toggle="tooltip" data-placement="top" title="Update">
									<i class = "fa fa-edit"></a></td>
									<td><a href="process.php?delete=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete">
									<i class = "fa fa-trash"></a></td>
								</tr>
							<?php
							}
						   ?>
						</tbody>
					</table>
				
				</div>
				
			</div>
		</div>
	</div>
	hdbjknssdk
</section>