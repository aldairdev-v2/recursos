<?php
//CONSULTAS CLIENTE
include_once("cliente_et.php");

function create_cliente($cliente){
    include_once("bd_conexion.php");
    $sql = "INSERT INTO clientes(nombre, app_paterno, app_materno, fecha_nacimiento, email, tel_celular, contrasena) VALUES ('"
    .$cliente->getNombre()."','".$cliente->getApp_paterno()."', '".$cliente->getApp_materno()."', '".$cliente->getFecha_nacimiento()."', '"
    .$cliente->getEmail()."', '".$cliente->getTel_celular()."', '".$cliente->getContrasena()."');";

    $stmt = $base_de_datos->prepare($sql);
    if($stmt->execute()){
        return true;
    }//if
    else{
        return false;
    }//else
}//create_cliente


function read_buscar($email, $contrasena){
    include_once("bd_conexion.php"); //incluir archivo de PHP
    $stmt = $base_de_datos->prepare("select * from clientes where email = $email and contrasena = $contrasena");
    $stmt->execute();
    $c = $stmt->fetch(PDO::FETCH_OBJ);
    return $c;
    
}//read buscar

