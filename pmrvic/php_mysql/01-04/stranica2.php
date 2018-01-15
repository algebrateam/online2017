<?php
session_start();
$_SESSION['var1']=1234;
$_SESSION['var2']="Neki moj text";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="naprednosessions.php">vrati me na stranicu 1 </a>

<?php

if(isset($_SESSION['brojevi'])){
foreach ($_SESSION['brojevi'] as $value) {
 	echo "-".$value;
 } 
}
array_push($_SESSION['brojevi'], rand(10,100));
?>
<br>

<a href="stranica3.php">spremi sve u COOKIE </a>

</body>
</html>