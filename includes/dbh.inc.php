<?php

$servername = 'localhost';
$dBUsername = 'root';
$dBPassword = 'podcross';
$dBName = 'podlogin';

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName); 

// Check connection
 if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());

  }
  
