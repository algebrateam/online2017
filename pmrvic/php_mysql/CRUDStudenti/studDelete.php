<?php
require_once 'dbconnect.php';
if(isset($_POST['deleted']) && isset($_POST['mbrStud'])){
    $stmt=$conn->prepare("DELETE FROM `fakultet`.`stud` WHERE stud.mbrStud=?");
$stmt->bind_param("i",$_POST['mbrStud']);
if($stmt->execute()){
    //echo "Uspješno obrisan student";
}
else{
    //echo "Dogodila se greška kod brisanja studenta<br>";
    //echo "<span style='color:red'>".$stmt->error."</span><hr>";
}
}
header('Location: studUpdate.php?mbrStud=1540');
exit;
?>