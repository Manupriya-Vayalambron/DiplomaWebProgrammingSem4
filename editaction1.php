<?php
$id=$_POST['t0'];
$name=$_POST['t1'];
$dob=$_POST['t2'];
$age=$_POST['t3'];
$gender=$_POST['t4'];
$lang=implode(',',$_POST['t5']);
$address=$_POST['t6'];
$state=$_POST['t7'];

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"regdb");
$sql="update regtbl1 set name='$name',dob='$dob',age='$age',gender='$gender',languages='$lang',address='$address',state='$state' where id=$id";
$query=mysqli_query($con,$sql);
if(!$query)
{
echo "not inserted";
}
else
{
echo "inserted successfully";
}
?>