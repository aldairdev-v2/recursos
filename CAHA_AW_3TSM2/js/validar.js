
var usuario   = document.getElementById("txUsuario");
var contra    = document.getElementById("txPassword");
var btAceptar = document.getElementById("btAceptar");

btAceptar.addEventListener("click", () => {
    if(usuario.value === "aldair" && contra.value === "12345"){
        document.location.href="elementos.html"
    }//if
    else{
        usuario.value="";
        contra.value="";
        usuario.focus();
        alert("Usuario y/o contraseña incorrectas".toUpperCase());
    }//else   
});