 <?php
$username="value";
$user="Manupriya";
setcookie($username,$user,time()+(86400*30),"/");
?>
<html>
<body>Cookies is set: <?php echo$_COOKIE[$username]; ?>
</body>
</html>