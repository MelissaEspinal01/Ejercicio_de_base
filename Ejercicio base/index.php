<?php
include_once'conexion.php';
$conectar=new conexion($host,$db,$user,$password);
$conectar->conectar();
echo"<br><br>";
$conectar->desconectar();
?> 