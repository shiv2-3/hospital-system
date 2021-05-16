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
			<th>APTID</th>
			<th>Name</th>
			<th>Year</th>
			<th>Month</th>
			<th>Aptlength</th>
			<th>Adate</th>
			<th>Provider</th>
			<th>Operatory</th>
			<th>Atime</th>
			<th>Aamount</th>
			
			<th><a href="makedelet.php">delete amount<50</a></th>
			
		</tr>
		</thead>
		<?php
$conn=mysqli_connect('localhost','root','');
$dbsel=mysqli_select_db($conn,'ibrain');
if($dbsel){
$query="SELECT * from appointmentinfo";
$record=mysqli_query($conn,$query);
//$i=1;
while($row=mysqli_fetch_assoc($record)){
extract($row);
?>
<tr>
	<!-- /<td><?=$i++;?></td> -->
	<td>
		<?=$aptid;?>
	</td>
	<td>
		<?=$name;?>
	</td>
	<td>
		<?=$year;?>
	</td>
	<td>
		<?=$month;?>
	</td>
	<td>
		<?=$aptlength;?>
	</td>
	<td>
		<?=$adate;?>
	</td>
	<td>
		<?=$provider;?>
	</td>
	<td>
		<?=$operatory;?>
	</td>
	<td>
		<?=$atime?>
	</td>
	<td>
		<?=$aamount?>
	</td>
	
	
</tr>
<?php
}
}
?>


</a>
</table>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a href="login.php"><button type="button btn-info">
				back
			</button>
			<a href="count.php"><button type="button btn-info">
				previous
			</button>
			</a>
		</div>
	</div>
</div>
</body>
</html>