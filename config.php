<?php
$db_host="localhost";
$db_usuario="DEFINIR_USUARIO";
$db_password="DEFINIR_CONTRASEÑA";
$db_nombre="NOMBRE_DE_USUARIO";
$conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error());
$db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error());
?> 
