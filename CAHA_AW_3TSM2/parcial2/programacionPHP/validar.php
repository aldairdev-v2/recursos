<?php

class Login{
    public function validar($u, $c){
        /*
        if($u == "Elbicho" && $c == "1234"){
            return true;
        }//if
        else{
            return false;
        }//else
        */       
        return ($u == "Aldair" && $c == "1234"); //optimizar cod
    }//function
} //clase Login


?>