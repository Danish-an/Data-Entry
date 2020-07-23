<?php 
include "includes/db.php";
if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query= "select * from user where username='$username' and password='$password' ";
	$result = mysqli_query($connection, $query);
	 if(mysqli_num_rows($result) == 1){
		 $_SESSION['username'] = $username;
       header("Location: home.php");
    }
	else{
		echo "incorrect";
		header("Location: login.php");
	}
	
	
	
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
	  <link rel="stylesheet" href="css/style.css">
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
		  
		</ul>
	  </div>
	  

			</div>
		</nav>		
</section>
<section class="main">
	<div class="container">
		<div class="row">
		<div class="col-sm-12 col-md-6 col-lg-6">
			<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" id="login" name="login" class="btn btn-primary">Submit</button>
  <button type="submit" id="register" class="btn btn-primary">Register</button>
  
</form>
		</div>
	</div>
</section>	
</html>