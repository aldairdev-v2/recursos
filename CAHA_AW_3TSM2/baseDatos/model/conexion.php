<?php

$contrasena = "bd";
$usuario = "postgres";
$db = "nomina";
# Puede ser 127.0.0.1 o el nombre de tu equipo, o la IP
$servidor = "localhost";
$puerto = "5432";

try{
    $base_de_datos = new PDO("pgsql:host=$servidor;port=$puerto;dbname=$db",
    $usuario, $contrasena);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión realizada";
}catch (Exception $e){
    echo "Ocurrió un error con la base de datos: ".$e->getMessage();
}//try