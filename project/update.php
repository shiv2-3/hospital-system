<?php
// $id=$_GET('id');
print_r($_POST);
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"ibrain");
$query="UPDATE patientinfo set p_id='".$_POST['p_id']."',bgroup='".$_POST['bgroup']."',fname='".$_POST['fname']."',lname='".$_POST['lname']."',age='".$_POST['age']."',mname='".$_POST['mname']."',dob='".$_POST['dob']."',gender='".$_POST['gender']."',cnumber='".$_POST['cnumber']."',city='".$_POST['city']."',email='".$_POST['email'].",afuture='".$_POST['afuture']."',state='".$_POST['state']."',pwd='".$_POST['pwd']."' where p_id='".$_POST['p_id']."'";
print_r($query);
$fire=mysqli_query($con,$query);
if($fire){
	header('location:rselect.php');
}
else{
	header('location:rselect.php');
}
?>