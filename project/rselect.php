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
	<div class="table-responsive">
	<table border="1" width="100%" class="table table-info table-hover table-bordered">
		<thead class="thead-dark">
		<tr>
			<th>PID</th>
			<th>Blood Group</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Mother</th>
			<th>DOB</th>
			<th>Gender</th>
			<th>Contact</th>
			<th>City</th>
			<th>Email</th>
			<th>Afuture</th>
			<th>State</th>
			<th>PWD</th>
			<th>Update</th>
		</tr>
		</thead>
		<?php
$conn=mysqli_connect('localhost','root','');
$dbsel=mysqli_select_db($conn,'ibrain');
if($dbsel){
$query="SELECT * from patientinfo";
$record=mysqli_query($conn,$query);
//$i=1;
while($row=mysqli_fetch_assoc($record)){
extract($row);
?>
<tr>
	<!-- /<td><?=$i++;?></td> -->
	<td>
		<?=$p_id;?>
	</td>
	<td>
		<?=$bgroup;?>
	</td>
	<td>
		<?=$fname;?>
	</td>
	<td>
		<?=$lname;?>
	</td>
	<td>
		<?=$age;?>
	</td>
	<td>
		<?=$mname;?>
	</td>
	<td>
		<?=$dob;?>
	</td>
	<td>
		<?=$gender;?>
	</td>
	<td>
		<?=$cnumber?>
	</td>
	<td>
		<?=$city?>
	</td>
	<td>
		<?=$email?>
	</td>
	<td>
		<?=$afuture?>
	</td>
	<td>
		<?=$state?>
	</td>
	<td>
		<?=$pwd?>
	</td>
	<td>
		<a href="pupdate.php">Update</a>
		
	</td>
</tr>
<?php
}
}
?>

<a href="makeappbtn.html"><button type="button" class="btn btn-lg btn-info">Back</button></a>
<a href="notapp.php">
	<button type="submit" class="btn btn-lg btn-info">Pateint details Who Do Not Have Appointment In Future</button>
</a>
</table>
</div>
</body>
</html>