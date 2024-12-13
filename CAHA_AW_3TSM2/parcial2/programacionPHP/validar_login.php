<?php
include_once("validar.php");
$objLogin = new Login();

if(isset($_POST["txUsuario"])){
    $u = $_POST["txUsuario"];
}//if usuario
else{
    $u = "vacia";
}//else usuario

if(isset($_POST["txPassword"])){
    $c = $_POST["txPassword"];
}//if password
else{
    $c = "vacia";
}//if password
if($objLogin -> validar($u, $c)){
    header("location: teoria.php");
}//if validar
else{
    header("location: login.php?m=mal");
}//else validar