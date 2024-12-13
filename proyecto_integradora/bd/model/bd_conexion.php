<?php

$contrasena ="sql";
$usuario = "postgres";
$bd ="proyecto_int";
# pude ser 127.0.0.1 o el nombre de tu equipo
$servidor ="localhost";
$puerto = "5432";

try{
    $base_de_datos = new PDO("pgsql:host=$servidor; port=$puerto; dbname=$bd", $usuario, $contrasena);
    $base_de_datos -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion realizada";
}catch(PDOException $e){
    echo "Ya veo a ocurrido un error con la base de datos:". $e->getMessage();
}//catch

/*
class Conexion{
    private $db = "proyecto_int";
    private $host = "localhost";
    private $user = "postgres";
    private $password = "";
    private $port = "5432";

    public $_conn;
    
    public function __construct(){
        try{
            //PDO (php data object)
            $dns = "pgsql:host=".$this->host.";dbname=".$this->db.";port=".$this->port;
            $this->_conn = new PDO($dns,$this->user,$this->password);
            $this->_conn->settAtribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "ok";
        }catch(PDOException $e){
            echo "La conexión falló.".$e->getMessage();
        }//catch
    }//constructor
    public function getC(){
        return $this->_conn;
    }
}//clase
*/