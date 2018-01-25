<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "db_connection.php";

$q = "SELECT COUNT(*) AS 'Broj' FROM nastavnik ";
$q .= "WHERE imeNastavnik LIKE 'M%'";

if($stmt = $mysqli->prepare($q)){
    
    $stmt->execute();

    $stmt->bind_result($col);

    while ($stmt->fetch()){
        echo $col;
    }
    
    $stmt->close();
}

$mysqli->close();