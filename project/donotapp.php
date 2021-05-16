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
	.nav-link{
		margin-left: 80px;

	}
	.nav-link:hover{
		background-color: lightgrey;

	}
	
	
	.hospital{
		height:250px;
		width: 600px;
		background-color:hsl(0, 0%, 90%);
		position: relative;
		bottom: 400px;
		left: 440px;
	}
	.btn2{
		position: relative;
		bottom: 500px;
		left: 500px;
	}
	.hi{
		position: relative;
		top:40px;
	}
	.about{
		position: relative;
		bottom: 200px;
	}
	.doctor{
		position: relative;
		bottom: 60px;
	}
	.doctor2{
		height:250px;
		width:100%;
		background-color:lightgrey;
		border-radius: 10%;
	}
	.doctor22{
		height:100px;
		width:100px;
		background-color: black;
		overflow: hidden;
		border-radius: 50%;
		position: relative;
		top: 75px;
		left: 15px;
	}
	.doc{
		position: relative;
		bottom: 20px;
	}
	.ch{
		font-size: 20px;
		position: relative;
		bottom: 20px;
	}
     .d2{
     	position: relative;
     	top:40px;
     }
     @media(max-width: 557px){
     	.doc{
     		position: relative;
     		left: 20px;
     	}
     	.ch{
     		position: relative;
     		left: 20px;
     	}
     }
     .a9{
     	margin-top: 80px;
     }
    

</style>
</head>

<body>
	<table border="1" width="100%">
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
		</tr>
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
	
</tr>
<?php
}
}
?>
<a href="logs.html"><button type="button" class="btn btn-lg btn-info">Back</button></a>
</table>
</body>
</html>