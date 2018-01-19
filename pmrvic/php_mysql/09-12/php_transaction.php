<?php
/*
BEGIN;
INSERT INTO mjesto1 (pbr,nazMjesto, sifZupanija)
VALUES ('11111','Zzzzzz',9);
SAVEPOINT SAVE1;
INSERT INTO mjesto (pbr,nazMjesto, sifZupanija)
VALUES ('22222','Zzzzzz',99);
COMMIT;
ROLLBACK TO SAVE1;
*/

require_once("db_mysqli.php");

$error_num=0;

echo "Započinjemo ".nl2br("neku transakciju...");

$query="BEGIN";
$result=$mysqli->query($query);


$query = "INSERT INTO mjesto1 (pbr,nazMjesto, sifZupanija)
VALUES (11111,'Zzzzzz',789);";

$result=$mysqli->query($query);

if(!$result) $error_num++;


$query ="SAVEPOINT SAVE1";

$result=$mysqli->query($query);

// Pokušamo napraviti grešku unijevši u nepostojeći stupac pbr1
$query = <<<EOD
INSERT INTO mjesto1 (pbr1,nazMjesto, sifZupanija)
VALUES (22222,'Zzzzzz',456);
EOD;


$result=$mysqli->query($query);
	
if(!	$result) $error_num++;

echo "<br> broj gresaka: ".$error_num;

/*
($error_num<1)? $query="COMMIT": $query="ROLLBACK TO SAVE1";
*/
//$query ="COMMIT";


$result=$mysqli->query($query);
$mysqli->close();
//echo " unešen ID:". mysql_insert_id();

?>