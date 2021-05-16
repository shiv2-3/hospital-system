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
	<table width="50%" class="table table-info table-striped table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			
			<th>First Name</th>
			<th>Last Name</th>
			
		</tr>
		</thead>
		<?php
$conn=mysqli_connect('localhost','root','');
$dbsel=mysqli_select_db($conn,'ibrain');
if($dbsel){
$query="SELECT fname,lname from patientinfo WHERE afuture = 'no'";
$record=mysqli_query($conn,$query);
//$i=1;
while($row=mysqli_fetch_assoc($record)){
extract($row);
?>
<tr>
	<!-- /<td><?=$i++;?></td> -->
	
	<td>
		<?=$fname;?>
	</td>
	<td>
		<?=$lname;?>
	</td>
	
	
</tr>
<?php
}
}
?>
<a href="rselect.php"><button type="submit" class="btn btn-danger" >back</button></a>
</table>
</div>
</body>
</html>