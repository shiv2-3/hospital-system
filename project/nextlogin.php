<?php

$conn=mysqli_connect('localhost','root','','ibrain');
if(isset($_POST['uname']))
{
$check="SELECT * from patientinfo where cnumber='".$_POST['uname']."' AND pwd='".$_POST['pwd']."'";
$q=mysqli_query($conn,$check);
$data=mysqli_fetch_assoc($q);
if(isset($data['pid']))
 {
if($data['cnumber']==$_POST['uname'] AND $data['pwd']==$_POST['pwd']) 
{
$_SESSION['id']=$data['pid'];

 echo "<script>window.location.href='makeappbtn.html'</script>";

}
else{
echo "<script>alert('wrong data pass');</script>";
echo "<script>window.location.href='makeappbtn.html'</script>";

}

}
else{
echo "<script>alert('Wrong username and password');</script>";
echo "<script>window.location.href='logs.html'</script>";

}
}

?>