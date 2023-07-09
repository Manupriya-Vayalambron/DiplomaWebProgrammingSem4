<html>
<head></head>
<body>
<center>
<h1>Registration Form</h1>
<form method="post" action="formaction1.php">
<table>
<tr>
<td> NAME </td>
<td> <input type="text" name="t1"></td>
</tr>

<tr>
<td> DOB </td>
<td> <input type="date" name="t2"></td>
</tr>

<tr>
<td> AGE </td>
<td> <input type="number" name="t3"></td>
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
<td><textarea name="t6"></textarea></td>
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
<td><input type="submit" value="Submit"></td>
</tr>

</table>
</form>
</center>
</body>
</html>