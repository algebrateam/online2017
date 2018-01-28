<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Mysql connection</title>
</head>

<?php
function begin(){
    global $conn,$query;
    $query="BEGIN";
    $result= mysqli_query($conn, $query);
}

function commit(){
    global $conn,$query;
    $query="COMMIT";
    $result = mysqli_query($conn,$query);
}

function rollback(){
    global $conn,$query;
    $query="ROLLBACK";
    $result = mysqli_query($conn, $query);
}

// Pokrecemo transakciju
begin();

$error_num = 0;

$query="INSERT INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query.=" VALUES ('99999', 'Zadara', 13)";
$result = mysqli_query($conn, $query);

if(!$result)
    $error_num++;

$query="INSERT INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query.=" VALUES ('88888', 'Rijeka', '8')";
$result = mysqli_query($conn, $query);
    
if(!$result)
$error_num++;
    
$query="INSERT INTO mjesto(pbr,nazMjesto,sifZupanija)";
$query.=" VALUES ('77777', 'Zagreb', '21')";
$result = mysqli_query($conn, $query);
    
if(!$result)
$error_num++;

if($error_num <= 0){
    commit();
echo 'uspjesno commit';

}
else{  
    echo 'Greška! negdje u querije, broj grešaka:'.$error_num;
    rollback();   
}

    

?>

</body>
</html>
