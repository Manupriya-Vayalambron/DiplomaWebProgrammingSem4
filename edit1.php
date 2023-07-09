<?php
$id=$_GET["uid"];
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"regdb");
$sql="select * from regtbl1 where id=$id";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{
?>

<html>
<head></head>
<body>
<center>
<h1>Registration Form</h1>
<form method="post" action="editaction1.php">
<table>

<tr>
<td>ID</td>
<td><input type="text" name="t0" value=<?php echo $row['id']; ?> readonly></td>
</tr>

<tr>
<td> NAME </td>
<td> <input type="text" name="t1" value=<?php echo $row['name']; ?>></td>
</tr>

<tr>
<td> DOB </td>
<td> <input type="date" name="t2" value=<?php echo $row['dob']; ?>></td>
</tr>

<tr>
<td> AGE </td>
<td> <input type="number" name="t3" value=<?php echo $row['age']; ?>></td>
</tr>

<tr>
<td> GENDER </td>
<td> <input type="radio" value="male" name="t4">MALE
<input type="radio" value="female" name="t4">FEMALE
</td>
</tr>

<tr>
<td>LANGUAGES KNOWN </td>
<td>
<input type="checkbox" value="english" name="t5[]">ENGLISH
<input type="checkbox" value="malayalam" name="t5[]">MALAYALAM
<input type="checkbox" value="hindi" name="t5[]">HINDI
<input type="checkbox" value="tamil" name="t5[]">TAMIL
</tr>

<tr>
<td> ADDRESS </td>
<td><textarea name="t6"><?php echo $row['address']; ?></textarea></td>
</tr>

<tr>
<td> STATE </td>
<td><select name="t7">
<option>--select--</option>
<option value="kerala">KERALA</option>
<option value="tamilnadu">TAMIL NADU</option>
<option value="karnataka">KARANATAKA</option>
</select>
</td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Update"> <a href="viewres.php"> Back </a></td>
</tr>

</table>
</form>
</center>
</body>
</html>

<?php
}
?>