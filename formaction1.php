<?php
$name=$_POST['t1'];
$dob=$_POST['t2'];
$age=$_POST['t3'];
$gender=$_POST['t4'];
$lang=implode(',',$_POST['t5']);
$address=$_POST['t6'];
$state=$_POST['t7'];

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"regdb");
$sql="insert into regtbl1 values('','$name','$dob','$age','$gender','$lang','$address','$state')";
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

<html>
<body>
<a href="viewres.php">click here to view inserted data</a>
</body>
</html>