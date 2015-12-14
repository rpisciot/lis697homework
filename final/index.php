<?php


include_once 'includes/header.php';
require_once 'includes/login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);



echo "A Website About All Things Jane the Virgin!";



include_once 'includes/footer.php';
?>