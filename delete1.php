<?php
$id=$_GET["uid"];
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"regdb");
$sql="delete from regtbl1 where id=$id";
$query=mysqli_query($con,$sql);
if(!query)
{
echo "not deleted";
}
else
{
header("Location:viewres.php");
}
?>