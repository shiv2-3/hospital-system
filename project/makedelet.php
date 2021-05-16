
		<?php
		


$conn=mysqli_connect('localhost','root','');
$dbsel=mysqli_select_db($conn,'ibrain');
if($dbsel){
	$query="DELETE FROM appointmentinfo WHERE aamount<50";
$fire=mysqli_query($conn,$query);

if($fire){
header('location:makeappbtnde.php');
}
else{
	echo "wrong process follow";
}
}

?>

