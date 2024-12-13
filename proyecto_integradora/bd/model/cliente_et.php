<?php
//ENTIDAD TONTA CLIENTE
class Cliente{
    private $id_cliente;
    private $nombre;
    private $app_paterno;
    private $app_materno;
    private $fecha_nacimiento;
    private $email;
    private $tel_celular;
    private $contrasena;

    public function __construct($id_cliente, $nombre, $app_paterno, $app_materno,
                                $fecha_nacimiento, $email, $tel_celular, $contrasena){
        
        $this-> id_cliente = $id_cliente;
        $this-> nombre = $nombre;
        $this-> app_paterno = $app_paterno;
        $this-> app_materno = $app_materno;
        $this-> fecha_nacimiento = $fecha_nacimiento;
        $this-> email = $email;
        $this-> tel_celular = $tel_celular;
        $this-> contrasena = $contrasena;                         
    }//contructor

    public function getId_cliente(){
        return $this->id_cliente;
    }//getId_cliente
    public function setId_cliente(){
        $this-> id_cliente = $id_cliente;
    }//setId_cliente

    public function getNombre(){
        return $this->nombre;
    }//getNombre
    public function setNombre(){
        $this-> nombre = $nombre;
    }//setNombre

    public function getApp_paterno(){
        return $this->app_paterno;
    }//getApp_paterno
    public function setApp_paterno(){
        $this-> app_paterno = $app_paterno;
    }//setApp_materno

    public function getApp_materno(){
        return $this->app_materno;
    }//getApp_materno
    public function setApp_materno(){
        $this-> app_materno = $app_materno;
    }//setApp_materno


    public function getFecha_nacimiento(){
        return $this->fecha_nacimiento;
    }//getFecha_nacimiento
    public function setFecha_nacimiento(){
        $this-> fecha_nacimiento = $fecha_nacimiento;
    }//setFecha_nacimiento

    public function getEmail(){
        return $this->email;
    }//getEmail
    public function setEmail(){
        $this-> email = $email;
    }//setEmail

    public function getTel_celular(){
        return $this->tel_celular;
    }//getTel_celular
    public function setTel_celular(){
        $this-> tel_celular = $tel_celular;
    }//setTel_celular

    public function getContrasena(){
        return $this->contrasena;
    }//getId_cliente
    public function setContrasena(){
        $this-> contrasena = $contrasena;
    }//setId_cliente
}//clase
?>