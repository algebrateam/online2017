<?php
   ob_start();
   session_start();

if(!isset($_SESSION['username'])){
  header("Location: login.php");
  exit();
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<span>tajna velike moći : misteriozo</span>

<a href = "logout.php" title = "Logout">Click here to LOGOUT </a>
