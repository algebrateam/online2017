<?php

$cookie_ime  = "Marica Marić";
$cookie_broj = "2132132448787";
$polje       = array('jabuka' => 4,'kruška' => 77,'šljiva' => 999);

$cookie_polje   =  json_encode($polje, JSON_PRETTY_PRINT);

$cookie_zajedno =  json_encode(array($cookie_ime,$cookie_broj,$cookie_polje), JSON_PRETTY_PRINT);

//echo $cookie_zajedno;

$cookie_name="test_cookie";

setcookie($cookie_name, $cookie_zajedno, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} 

else {
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";	

echo "<pre>";
echo $_COOKIE[$cookie_name];
echo "</pre>";	


echo "json samo sa print_r";
echo "<pre>";
print_r(json_decode($_COOKIE[$cookie_name]));
echo "</pre>";

Echo "Ispis Json dekodiranog člana:<br>";

echo "<pre>";
$arr=json_decode($_COOKIE[$cookie_name]);
print_r($arr);

foreach (json_decode($arr[2]) as $key => $value) {
	echo "vrijednost ključa $key:".$value."<br>";
}

echo "</pre>";



}
?>

</body>
</html> 