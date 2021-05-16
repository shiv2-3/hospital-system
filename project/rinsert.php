<?php
session_start();
$_SESSION['id']=$_SESSION['pid'];
extract($_POST);
if (isset($_POST['save']))
{
$conn=mysqli_connect('localhost','root','');
$data=mysqli_select_db($conn,'ibrain');
//if($data){
$sql="insert into patientinfo values('','$p_id','$bgroup','$fname
','$lname','$age','$mname','$dob','$gender','$cnumber','$city','$email','$afuture','$state','$pwd')";
$q=mysqli_query($conn,$sql);
//if($q){
echo "<script>alert('register sucessfully');</script>";
header('location:logs.html');
$_SESSION['p_id']=$p_id;
/*}
else{
	echo "error Detect";
}*/

//}
}
?>
