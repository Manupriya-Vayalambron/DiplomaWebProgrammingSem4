<html>
<head>
</head>
<body>
<center>
<h1> VIEW INSERTED DATA </h1>
<table border="1">

<tr>
    <th>id</th>
<th>name</th>
<th>dob</th>
<th>age</th>
<th>gender</th>
<th>language</th>
<th>address</th>
<th>state</th>
<th>action</th>
</tr>


<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"regdb");
$sql="select * from regtbl1";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{
$id=$row['id'];
?>

<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['languages'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['state'];?></td>
<td>
<a href="edit1.php?uid=<?php echo $id;?>">Edit</a>
<a href="delete1.php?uid=<?php echo $id;?>">Delete</a>
</td>
</tr>

<?php
}
?>
</tr>
</table>
</center>
</body>
</html>