<?php
//ENTIDAD TONTA CLIENTE
class Cita{
    private $id_cita;
    private $nombre;
    private $telefono_cl;
    private $email;
    private $fecha;
    private $hora;
   

    public function __construct($id_cita, $telefono_cl, $email, $fecha, $hora){
        
        $this-> id_cita = $id_cita;
        $this-> telefono_cl = $telefono_cl;
        $this-> email = $email;
        $this-> fecha = $fecha;
        $this-> hora = $hora;                      
    }//contructor

    public function getId_cita(){
        return $this->id_cita;
    }//getId_cita
    public function setId_cita(){
        $this-> id_cita = $id_cita;
    }//setId_cita

    public function getTelefono_cl(){
        return $this->telefono_cl;
    }//getApp_paterno
    public function setTelefono_cl(){
        $this-> telefono_cl = $telefono_cl;
    }//setApp_materno

    public function getEmail(){
        return $this->email;
    }//getNombre
    public function setEmail(){
        $this-> email = $email;
    }//setNombre

    public function getFecha(){
        return $this->fecha;
    }//getApp_paterno
    public function setFecha(){
        $this-> fecha = $fecha;
    }//setApp_materno

    public function getHora(){
        return $this->hora;
    }//getApp_paterno
    public function setHora(){
        $this-> hora = $hora;
    }//setApp_materno
}
?>