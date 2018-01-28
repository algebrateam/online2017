<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="naprednosessions.php">vrati me na stranicu 1 </a>

<?php
setcookie('mojibrojevi',serialize($_SESSION['brojevi']),time()+6000);
?>


</body>
</html>