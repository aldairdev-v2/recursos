<?php

function validar($u, $c){
    include_once("bd_conexion.php");
    $sql = "select * from clientes where email = ? and contrasena = ?";
    $stmt = $base_de_datos -> prepare($sql);
    $stmt-> bindParam(1, $u);
    $stmt-> bindParam(2, $c);
    $stmt-> execute();
    if($stmt->rowCount()>0){
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);
    }//if
    else{
        $usuario = null;
    }//return
    return $usuario;
}//validar


$r = validar($_POST['user'],$_POST['password']);
if($r != null){
    header("location:../../Indexsesioniniciada.html");
}//if 
else{
    echo"mal";
    header("location:../vista/login.php");
}//else


