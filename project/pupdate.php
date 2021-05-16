<?php
//$id=$_GET['pid'];
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'ibrain');
if($db){
	$query="SELECT * from patientinfo";
	$fire=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($fire);
	extract($record);
}
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
</head>
<body>
	<section class="bg-light">
<form action="update.php" method="post" enctype="multipart/form-data">
<div class="container a9">
	<div class="row border pb-5">
		<div class="col-md-12 p-3 bg-light text-center">
			<h2 class="text-uppercase text-info font-weight-bold">Patient Registratation Form</h2>
			<p class="font-weight-bold text-info">Registration Form 2019-20</p>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold" hidden="">Patient:</label>
				</div>
				<div class="col-md-9">

					<input type="text" name="pid" class="form-control"  hidden="" value="<?=$pid?>">
					
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Patient Id:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="p_id" class="form-control" value="<?=$p_id?>">

				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Blood Group</label>
				</div>
				<div class="col-md-9">
					<select name="bgroup" class="form-control" value="<?=$bgroup?>">
						<option value="<?=$bgroup?>">Select</option>
						<option value="<?=$bgroup?>">A+</option>
						<option value="<?=$bgroup?>">B+</option>
						<option value="<?=$bgroup?>">o+</option>
						<option value="<?=$bgroup?>">AB+</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold"> FirstName:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="fname" class="form-control" value="<?=$fname?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Last Name:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="lname" class="form-control" value="<?=$lname?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Age:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="age" class="form-control" value="<?=$age?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Mother Name:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="mname" class="form-control" value="<?=$mname?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Birth Date:</label>
				</div>
				<div class="col-md-9">
					<input type="date" name="dob" class="form-control" value="<?=$dob?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Gender:</label>
				</div>
				<div class="col-md-9">
					<select name="gender" class="form-control" value="<?=$gender?>">
						<option value="<?=$gender?>">Select</option>
						<option value="<?=$gender?>">male</option>
						<option value="<?=$gender?>">female</option>
						<option value="<?=$gender?>">other</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Contact Number:</label>
				</div>
				<div class="col-md-9">
					<input type="number" name="cnumber" class="form-control" value="<?=$cnumber?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">City:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="city" class="form-control" value="<?= $city?>">
				</div>
			</div>

		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">E-mail:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="email" class="form-control" value="<?=$email?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Appointment Future:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="afuture" class="form-control" value="<?=$afuture?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">State:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="state" class="form-control" value="<?=$state?>">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Password:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="pwd" class="form-control" value="<?=$pwd?>">
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
</body>
</html>
