<?php
// set the expiration date to one hour ago
setcookie("var1", "", time() - 3600);
?>
<html>
<body>

<?php
echo "Cookie 'var1' is deleted.";
?>

</body>
</html>

