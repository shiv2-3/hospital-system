
<?php
session_start();
extract($_POST);
$id=$_SESSION['pid'];

if (isset($_POST['make']))
{
$conn=mysqli_connect('localhost','root','','ibrain');
$sql="insert into appointmentinfo values('','$aptid','$name','$year
','$month','$aptlength','$adate','$provider','$operatory','$atime','$aamount','$pid')";
$q=mysqli_query($conn,$sql);
echo "<script>alert(' save sucessfully.....');</script>";
echo "<script>window.location.href='makeappbtnde.php'</script>";


}

?>
<?php
/*$_SESSION['pid']=1;
$conn=mysqli_connect('localhost','root','','ibrain');
$query="INSERT INTO `appointmentinfo`( `apt_id`,`name`, `year`, `month`, `aptlength`, `adate`, `provider`, `operatory`, `atime`,`aamount`,`pid`,) VALUES ('".$_POST['apt_id']."','".$_POST['name']."','".$_POST['year']."','".$_POST['month']."','".$_POST['aptlength']."','".$_POST['adate']."','".$_POST['provider']."','".$_POST['operatory']."','".$_POST['atime']."','".$_POST['aamount']."'".$_SESSION['pid']."')";
$fire=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($fire);
if (isset($data['pid'])) {
	$_SESSION['id']=$data['pid'];
	print_r($_SESSION);
}*/
?>