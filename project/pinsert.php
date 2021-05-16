<?php
session_start();
extract($_POST);
if (isset($_POST['total']))
{
$conn=mysqli_connect('localhost','root','');
$data=mysqli_select_db($conn,'ibrain');
//if($data){
$sql="insert into transactioninfo values('','$srno','$ptype','$cname
','$pname','$year','$month','$amounts','$cid')";
$q=mysqli_query($conn,$sql);
//if($q){
echo "<script>alert('clinicinfo save sucessfully.....');</script>";
echo "<script>window.location.href='select.php'</script>";

/*}
else{
	echo "error Detect";
}*/

//}
}
?>