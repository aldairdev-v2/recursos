<?php 
include_once("../model/clienteDAO.php");
$cliente = new Cliente("", $_POST["nombre"], $_POST["app_paterno"], $_POST["app_materno"], $_POST["fecha_nacimiento"], $_POST["email"], $_POST["tel_celular"], $_POST["contrasena"]);

create_cliente($cliente);
header("location:../vista/login.php");