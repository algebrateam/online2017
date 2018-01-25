<?php
session_start();


$p=array();   // P=polje_brojeva !!!
/*
function show(){
	$p[]=11;
	$p[]=100;
	$p[]=111;
	print_r($p);
}*/
include "naprednosessions.inc.php";
	$p[]=22;
	$p[]=200;
	$p[]=222;
show();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="stranica2.php">odvedi me na stranicu2 </a>
<br>
<?php
$_SESSION['brojevi']=array(1,2656,52,355,325,355,65855);
if(isset($_SESSION['var1'])){
echo $_SESSION['var1'];
echo "<br>";
echo $_SESSION['var2'];
}
array_push($_SESSION['brojevi'], rand(10,100));
//echo session_id();


echo "<hr><pre>";
//echo unserialize($_COOKIE['mojibrojevi']);
//print_r(unserialize($_COOKIE['mojibrojevi']));
echo "</pre>";

function getcookie($name){
return unserialize($_COOKIE[$name]);
}
print_r( getcookie('mojibrojevi'));


?>
</body>
</html>