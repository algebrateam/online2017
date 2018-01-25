<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host = "localhost";
$user = "root";
$password = "";
$database = "fakultet";
$mysqli = new mysqli($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "ERROR";
    echo mysqli_connect_error();
    exit;
}