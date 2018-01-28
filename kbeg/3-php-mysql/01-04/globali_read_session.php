<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
echo "favcolor je: ".$_SESSION["favcolor"]."<br>";
echo "favanimal je:".$_SESSION["favanimal"];

?>

</body>
</html>