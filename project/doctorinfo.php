<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
	.a9{
		background-image: url(do.png);
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}

</style>
</head>
<body>
	<section class="a9">
<form action="" method="post">
<div class="container">
	<div class="row border pb-5">
		<div class="col-md-12 p-3 bg-light text-center">
			<h2 class="text-uppercase text-info font-weight-bold">Doctor</h2>
			
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-white font-weight-bold">Doctor Id:</label>
				</div>
				<div class="col-md-9">

					<input type="text" name="did" class="form-control" placeholder="Enter Doctor Id.">
					
				</div>
			</div>
		</div>
		<?php
		print_r($_POST);
		?>
		
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-white font-weight-bold"> FirstName:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="fname" class="form-control" placeholder="Enter First Name.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-white font-weight-bold">Last Name:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="lname" class="form-control" placeholder="Enter Last Name.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-white font-weight-bold">City:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="city" class="form-control" placeholder="Enter city.">
				</div>
			</div>
		</div>
		
		
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-white font-weight-bold">State:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="state" class="form-control" placeholder="Enter state.">
				</div>
			</div>
		</div>
		
		
		
		
		<div class="col-md-12 mt-4 text-center">
			<button class="btn btn-success btn-lg" name="save" >Save</button>
			<button class="btn btn-warning btn-lg" type="reset">Reset</button>
		</div>
	</div>
</div>
</form>
</section>
<div class="table-responsive">
	<table width="50%" class="table table-info table-striped table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			
			<th>Did</th>
			<th>first name</th>
			<th>last name</th>
			<th>City</th>
			<th>State</th>
			</tr>
		</thead>
		<?php
$conn=mysqli_connect('localhost','root','');
$dbsel=mysqli_select_db($conn,'ibrain');
if($dbsel){
$query="SELECT*from doctorinfo";
$record=mysqli_query($conn,$query);
//$i=1;
while($row=mysqli_fetch_assoc($record)){
extract($row);
?>
<tr>
	<!-- /<td><?=$i++;?></td> -->
	
	<td>
		<?=$did;?>
	</td>
	<td>
		<?=$fname;?>
	</td>
	<td>
		<?=$lname?>
	</td>
	<td>
		<?=$city?>
	</td>
	<td>
		<?=$state?>
	</td>
	
</tr>
<?php
}
}
?>
<a href="login.php"><button type="submit" class="btn btn-danger" >back</button></a>
</table>
</div>
</body>
</html>

</body>
</html>
<?php
//$_SESSION['c_id'];
extract($_POST);
if (isset($_POST['save']))
{
$conn=mysqli_connect('localhost','root','');
$data=mysqli_select_db($conn,'ibrain');

$sql="insert into doctorinfo values('','$did','$fname','$lname
','$city','$state','$cid')";
$q=mysqli_query($conn,$sql);
//if($q){
echo "<script>alert('doctorinfo save sucessfully.....');</script>";
echo "<script>window.location.href='doctorinfo.php'</script>";


}
?>