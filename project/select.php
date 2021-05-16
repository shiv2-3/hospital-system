<?php
$conn=mysqli_connect('localhost','root','','ibrain');
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
</head>
<body>
	<section class="bg-light" id="app">
<form action="pinsert.php" method="post">
<div class="container a9">
	<div class="row ">
		<div class="col-md-12 p-3 bg-light text-center">
			<h2 class="text-uppercase text-info font-weight-bold">Transaction Details</h2>
			
		</div>
		
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Sr No :</label>
				</div>
				<div class="col-md-9">
				<input type="text" name="srno" class="form-control" placeholder="Enter Appointement.">
				</div>
			</div>
		</div>
		
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Production Types:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="ptype" class="form-control" placeholder="Enter Production type.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Clinic Name:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="cname" class="form-control" placeholder="Enter cname.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Provider Name:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="pname" class="form-control" placeholder="Enter month.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Year:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="year" class="form-control" placeholder="Enter year.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Month:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="month" class="form-control" placeholder="Enter month.">
				</div>
			</div>
		</div>
		
		
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Amounts:</label>
				</div>
				<div class="col-md-9">
					<input type="number" name="amounts" class="form-control" placeholder="Enter Amounts.">
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		<div class="col-md-12 mt-4 text-center">
			<button class="btn btn-info btn-lg" name="total">Total</button>
			
		</div>
	</div>
</div>
</form>
</section>
<div class="table-responsive">
	<table width="50%" class="table table-info table-striped table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			
			<th>SrNo</th>
			<th>Production Types</th>
			<th>Clinic Name</th>
			<th>Provider Name</th>
			<th>Year</th>
			<th>Month</th>
			<th>Amounts</th>
			
		</tr>
		</thead>
		<?php
$conn=mysqli_connect('localhost','root','');
$dbsel=mysqli_select_db($conn,'ibrain');
if($dbsel){
$query="SELECT*from transactioninfo";
$record=mysqli_query($conn,$query);
//$i=1;
while($row=mysqli_fetch_assoc($record)){
extract($row);
?>
<tr>
	<!-- /<td><?=$i++;?></td> -->
	
	<td>
		<?=$srno;?>
	</td>
	<td>
		<?=$ptype;?>
	</td>
	<td>
		<?=$cname?>
	</td>
	<td>
		<?=$pname?>
	</td>
	<td>
		<?=$year?>
	</td>
	<td>
		<?=$month?>
	</td>
	<td>
		<?=$amounts?>
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
