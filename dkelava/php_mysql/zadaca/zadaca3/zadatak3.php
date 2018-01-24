<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "db_connection.php";

$q = "SELECT * FROM stud WHERE prezStud LIKE 'B%'";
$result = $mysqli->query($q);

if($result){
    while($row = $result->fetch_assoc()){
        echo $row['imeStud'] . " " . $row['prezStud'] . "<br/>";
    }
}

$mysqli->close();