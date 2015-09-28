<?php
$hostname = '127.0.0.1';
$user = 'testuser';
$password = 'testuser';
$database = 'db_ven01';
$conexion = mysqli_connect($hostname, $user, $password, $database) or die("No se pudo establecer conección con el BD.");
?> 
