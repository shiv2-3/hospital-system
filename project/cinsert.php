
<?php
extract($_POST);
if (isset($_POST['save']))
{
$conn=mysqli_connect('localhost','root','');
$data=mysqli_select_db($conn,'ibrain');
//if($data){
$sql="insert into clinicinfo values('','$c_id','$cname','$citi
','$mstate')";
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
