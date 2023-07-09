<html>
<head><title> Electricity Bill</title>
<style>
tr:nth-child(even)
{
background-color:#f2f2f2;
}
th{
background-color:green;
color;white;
}
th,td{
padding:15px;
}
</style>
</head>
<body>
<br><br>
<center>
<?php
$units=$_GET['pres'] - $_GET['prev'];
if($units<100)
{
    $amount=$units;
}
else if($units>=100 && $units<200)
{
    $amount=$units*2;
}
else if($units>=200 && $units<300)
{
    $amount=$units*3;
}
else{
    $amount=$units*4;
}
print("<table width='800'><tr><th colspan='2'>ELECTRICITY BILL</th></tr>");
print("<tr><td>Customer Number:</td> <td>".$_GET['no']."</td></tr>");
print("<tr><td>Customer Name:</td> <td>".$_GET['first']."</td></tr>");
print("<tr><td>Previous Reading:</td> <td>".$_GET['prev']."</td></tr>");
print("<tr><td>Present Reading:</td> <td>".$_GET['pres']."</td></tr>");
print("<tr><td>Units Consumed:</td> <td>$units</td></tr>");
print("<tr><td>Amount:</td> <td>$amount</td></tr>");
print("</table></center></body></html>");
?>
