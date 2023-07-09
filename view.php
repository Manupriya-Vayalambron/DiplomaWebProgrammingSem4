<html>
<head></head>
<body>
<center>
<h1>view bills</h1>
<table cellpadding="25" border="2">
<tr>
<th>Consumer No</th>
<th>Customer Name</th>
<th>Previous Reading</th>
<th>Present Reading</th>
<th>Unit</th>
</tr>

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

$sql="select * from bill_tbl";
$result=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($result))
{?>
<tr>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td><?php echo $row[3];?></td>
<td><?php echo $row[4];?></td>
<td><?php echo $row[4]-$row[3];?></td>
</tr>

<?php }
}
}
?>


</tr>

</table>
</center>
</body>
</html>