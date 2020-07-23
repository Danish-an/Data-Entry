
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
			<form action = "" method="POST">
	<?php
			include "includes/db.php";
			$id = $_GET['edit'];
			$showquery = " select *  from people where id = '$id' ";
			$query =  mysqli_query($connection, $showquery);
			$showdata = mysqli_fetch_array($query);
			
	?>
	
	  <div class="form-group">
		<label for="exampleInputName1">Name</label>
		<input type="text" name="firstname" class="form-control" id="exampleInputName1" value="<?php echo $showdata['firstname'];?>" aria-describedby="nameHelp" placeholder="Enter name">
		
	  </div>
  <div class="form-group">
    <label for="exampleInputNoofpeoples1">No. of peoples</label>
    <input type="number" name="nopeople" class="form-control" id="exampleInputNoofpeoples1" value="<?php echo $showdata['nopeople'];?>" placeholder="Enter">
  </div>
  <div class="form-group">
    <label for="exampleInputtime">Arrival Timing</label>
    <input type="time" name="atiming" class="form-control" id="exampleInputNoofpeoples1" value="<?php echo $showdata['atiming'];?>"placeholder="Enter Time">
  </div>
   <div class="form-group">
    <label for="exampleInputdate">Date</label>
    <input type="date"  name="date" class="form-control" id="exampleInputNoofpeoples1" value="<?php echo $showdata['date'];?>" placeholder="Enter Date">
  </div>

  
  <button type="submit" id="register" name="update" class="btn btn-primary">Update</button>
  <?php
			
		  if(isset($_POST['update'])){
			$idupdate = $_GET['edit'];

			$firstname = $_POST['firstname'];
			$nopeople = $_POST['nopeople'];
			$atiming = $_POST['atiming'];
			$date = $_POST['date'];
			
			$upquery = "update people set id = '$idupdate' ,firstname = '$firstname' ,nopeople = '$nopeople' ,atiming = '$atiming' 
						date = '$date' where id = '$idupdate' ";
			$result = mysqli_query($connection, $upquery);
			if($result){
				?>
				<script>
					alert("data updated properly");
				</script>
				<?php
			}
			else{
				?>
				<script>
					alert("data not updated properly");
				</script>
				<?php
			}
		  }

  
		?>
  </form>
		</div>
  	</div>
	</div>
</section>




<html>
   <head>
      <script type="text/javascript">
    function showAlert() {
               alert("This is an alert from head section")
            }
           </script>
  </head>   
   <body>
      <input type="button" onclick="showAlert()" value="Say Hello" />
   </body>
</html>

