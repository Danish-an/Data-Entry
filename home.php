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
	
</style>
</head>
<body>
<section id="header">
		

	
    <div class="container-fluid">
	<nav class="navbar navbar-expand-sm fixed-top navbar-light">
		<div class="container">
        <a class="navbar-brand" href="#">Brand</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
			 <li class="nav-item">
			<a class="nav-link" href="history.php">Past Entry</a>
		  </li>
		   <li class="nav-item">
			<a class="nav-link" href="logout.php">Log out</a>
		  </li>
		</ul>
	  </div>
	  

			</div>
		</nav>		
</section>
<section class="main" id="section1">
	<div class="container">
		<div class="row">
		
		<div class="col-sm-12 col-md-6 col-lg-6 ">
			<form name ="myForm" action = "" method="POST">
	
	  <div class="form-group">
		<label for="exampleInputName1">Name</label>
		<input type="text" name="firstname" class="form-control" id="inputname1" value="" aria-describedby="nameHelp" placeholder="Enter name" required>
		
	  </div>
  <div class="form-group">
    <label for="exampleInputNoofpeoples1">No. of peoples</label>
    <input type="number" name="nopeople" class="form-control" id="peoples1" placeholder="Enter" required>
  </div>
  <div class="form-group">
    <label for="exampleInputtime">Arrival Timing</label>
    <input type="time" name="atiming" class="form-control" id="time1" placeholder="Enter Time" required>
  </div>
   <div class="form-group">
    <label for="exampleInputdate">Date</label>
    <input type="date"  name="date" class="form-control" id="date1" placeholder="Enter Date" required>
  </div>
  

  
  <button type="submit" id="register"  name="add" class="btn btn-primary">Add to list</button>
  <p class="h6 ">*Please enter the details to proceed</p>
  <?php
  if(isset($_POST['add'])){
	$firstname = $_POST['firstname'];
	$nopeople = $_POST['nopeople'];
	$atiming = $_POST['atiming'];
	$date = $_POST['date'];
	/////////// ERROR CHECKING FOR EMPTY FILEDS

	$query= "insert into people(firstname, nopeople , atiming , date) values('$firstname', '$nopeople', '$atiming' , '$date') ";
	$result = mysqli_query($connection, $query);
	$hisquery= "insert into history(name, peoples ,timing , date) values('$firstname', '$nopeople', '$atiming' , '$date') ";
	$res = mysqli_query($connection, $hisquery);
	header("Location:home.php");
	
  }

  
  ?>
</form>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 my-5 ">
				<p class="h3 ">Welcome back! <span> <?php echo $_SESSION['username']; ?>.</span></p>
				<br>
				<p class="h6">Record the data digitally by  entering the details.Get free from manual and tedious way of handling data in files.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit .</p>
				
		</div>
		</div>
	</div>
</section>	
<section id="data">
<div class="container">
<p class="h5" >ADDED DATA</p>

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
						   
						   
						   $query = "SELECT * FROM people";
						   $selectResult = mysqli_query($connection, $query);
						   $res = mysqli_num_rows($selectResult);
						    if(!$selectResult){
								die("FAILED");
							}
							while($row = mysqli_fetch_array($selectResult)){
							?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['firstname']; ?></td>
									<td><?php echo $row['nopeople']; ?></td>
									<td><?php echo $row['atiming']; ?></td>
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
	<button type="button" class="btn btn-primary" id="buttn">Primary</button>
</section>
<section>

</section>

</body>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script src="js/snbutton.js"></script>
<script>
$(document).ready(function(){
	SNButton.init("register",{
	fields: ["inputname1" ,"peoples1" ,"time1" ,"date1"],
	enableText: "Ok go to submit",
	disabletext: "Input First"
	})
})
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
	$(function() {
		$('#register').click(function(){
			Swal.fire({
			  type: 'success',
			  title: 'Inserted',
			  text: 'Your work have been saved!',
			 
			})
		});
	});


</script>

</html>
