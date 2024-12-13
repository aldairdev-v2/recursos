<?php 
include_once("../model/citaDAO.php");
$cita = new Cita("", $_POST["telefono_cl"], $_POST["email"], $_POST["fecha"], $_POST["hora"]);

create_citas($cita);
header("location:../../catalogo.html");