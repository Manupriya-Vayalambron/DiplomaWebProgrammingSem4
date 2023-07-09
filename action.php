<html>
<head></head>
<body>
<center>
<a href="view.php">view</a>

</center>
</body>
</html>


<?php
$connection=mysqli_connect("localhost","root","");
if(!$connection)
{
echo "connection error";
}
else
{
$db=mysqli_select_db($connection,"electricity");
if(!$db)
{
echo "db error";
}
else
{
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$sql="insert into bill_tbl values('','$a','$b','$c','$d')";
$result=mysqli_query($connection,$sql);
if(!$result)
{
echo "error insertion";
}
echo "insertion successful";
}
}

?>