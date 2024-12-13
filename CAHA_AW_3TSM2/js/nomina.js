//**VARIABLES CAJAS DE TEXTO */

var nombre = document.getElementById("txNombre");
var sueldo = document.getElementById("txSueldo");
var antig  = document.getElementById("txAntig");

//**VARIABLES BOTONES*/

var btacp  = document.getElementById("btAceptar");
var btelim = document.getElementById("btEliminar");

//btAceptar
btacp.addEventListener("click", () => {
    if(campos(nombre)){
        alert("Nombre de trabajador vacío!".toUpperCase());
        nombre.focus();
    }//if
    else if(campos(sueldo)){
        alert("Sueldo trabajador vacío!".toUpperCase());
        sueldo.focus();
    }//else if
    else if(campos(antig)){
        alert("Indique años antigüedad!".toUpperCase());
        antig.focus();
    }//else if
    else{
        console.log("crear tabla");
    }
});//Aceptar


//CAMPOS VACÍOS
function campos(txbox){
    if(txbox.value == "" || txbox.length == 0){
        return true;
    }//if
    else{
        return false;
    }//else
}//campos


// VALIDAR TEXTO
function valtexto(evnt){
    var cd = (evnt.wich) ? evnt.wich : evnt.keyCode;
    console.log(cd);
    if((cd == 32) || (cd == 241) || (cd >= 97 && cd <= 122) || (cd >= 65 && cd <= 90)){
        return true;
    }//if
    else{
        return false;
    }//else
}//valtexto


// VALIDAR NÚMEROS
function valnumeros(evnt){
    var cd = (evnt.wich) ? evnt.wich : evnt.keyCode;
    console.log(cd)
    if(cd == 8 || cd == 46){
        return true;
    }//if
    else if(cd >= 48 && cd <= 57){
        return true;
    }//else if
    else{
        return false;
    }//else
}//valnumeros