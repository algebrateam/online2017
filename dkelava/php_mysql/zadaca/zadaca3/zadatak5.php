<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require "db_connection.php";

$q = "SELECT * FROM stud WHERE imeStud LIKE 'A%'";
$result = $mysqli->query($q);

$row_count = $result->num_rows;
echo "Broj studenata cije ime pocinje s A: " . $row_count;
