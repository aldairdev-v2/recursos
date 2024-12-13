<?php
//CONSULTAS CLIENTE
include_once("cita_et.php");

function create_citas($cita){
    include_once("bd_conexion.php");
    $sql = "INSERT INTO citas(telefono_cl, email, fecha, hora) VALUES ('"
    .$cita->getTelefono_cl()."','".$cita->getEmail()."', '".$cita->getFecha()."', '".$cita->getHora()."');";

    $stmt = $base_de_datos->prepare($sql);
    if($stmt->execute()){
        return true;
    }//if
    else{
        return false;
    }//else
}//create_cita