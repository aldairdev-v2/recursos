//** CAJAS DE TEXTO **/
var cliente = document.getElementById("txCliente");
var articulo = document.getElementById("txArt");
var precio = document.getElementById("txPrecioun");
var cantidad = document.getElementById("txCant");

//** BOTONES */
var btAcp = document.getElementById("btAceptar");
var btLmp = document.getElementById("btLimpiar");

//** COLUMNAS DE LAS TABLAS */
var nombre = document.getElementById("nombre");
var cSubt = document.getElementById("cSubt");
var cIVA = document.getElementById("cIVA");
var cTotal = document.getElementById("cTotal");

//** VARIABLES NUMÉRICAS */
const IVA  = 0.15;
var subTot = 0;
var iva    = 0;
var total  = 0;
var sTotal = document.getElementById("sTotal");

btLmp.addEventListener("click", () => {
    var Tb1 = document.getElementById("TbContenido");
    var tblBody = Tb1.getElementsByTagName("tbody")[0];
    tblBody.innerHTML = "";
    nombre.innerHTML = "";
    cIVA.innerHTML = "";
    cSubt.innerHTML = "";
    cTotal.innerHTML = "";
    cliente.value = "";
    articulo.value = "";
    precio.value = "";
    cantidad.value = "";
    sTotal.value = "";
    subTot = 0;
    iva = 0;
    total = 0;
    cliente.focus();
});//btLmp

btAcp.addEventListener("click", () => {
    if(vacio(cliente)){
        alert("Nombre de cliente vacío!".toUpperCase());
        cliente.focus();
    }
    else if(vacio(articulo)){
        alert("Nombre de artículo vacío!".toUpperCase());
        articulo.focus();
    }
    else if(vacio(precio)){
        alert("Precio vacío!".toUpperCase());
        precio.focus();
    }
    else if(vacio(cantidad)){
        alert("Indique cantidad artículo(s)!".toUpperCase());
        cantidad.focus();
    }
    else{
        nombre.innerHTML = "<b>" + cliente.value.toUpperCase() + "</b>";
        var Tb1     = document.getElementById("TbContenido");
        var tblBody = Tb1.getElementsByTagName("tbody") [0];
        var hilera  = document.createElement("tr");
        var datos = [articulo.value, cantidad.value, parseFloat(precio.value).toFixed(2), 
            parseFloat(cantidad.value * precio.value).toFixed(2)];

        for(i = 0; i < datos.length; i++){
            var c1 = document.createElement("td");
            if(i == 0){
                c1.setAttribute("style", "text-align: left");
            }//if
            c1.innerHTML = datos[i];
            hilera.appendChild(c1);
        }//for i
        tblBody.appendChild(hilera);
        Tb1.appendChild(tblBody);

        //PROCEDIMIENTOS
        subTot += (parseFloat(precio.value) * parseFloat(cantidad.value));
        sTotal.value = subTot.toFixed(2);
        cSubt.innerHTML = "<b>" + sTotal.value + "</b>";
        iva = subTot * IVA;
        iva = iva.toFixed(2);
        total = parseFloat(subTot) + parseFloat(iva);
        total = total.toFixed(2);
        cIVA.innerHTML = "<b>" + iva + "</b>";
        cTotal.innerHTML ="<b>" + total +"</b>";
        //Limpiar articulos
        
        articulo.value = "";
        precio.value = "";
        cantidad.value = "";
        articulo.focus();
    }//else
});//btAceptar

function vacio(caja){
    if(caja.value == "" || caja.length == 0){
        return true;
    }
    else{
        return false;
    }
}//vacio 

function onlyLetras(evn){
    var cod = (evn.wich) ? evn.wich : evn.keyCode;
    console.log(cod);
    if((cod == 225) || (cod == 237) || (cod == 233) || (cod == 225) || (cod == 32) || (cod == 241) || 
        (cod == 209) || (cod >= 97 && cod <= 122) || (cod >= 65 && cod <= 90)){
        return true;
    }
    else{
        return false;
    }
}//onlyLetras

function onlyNumero(evn){
    var cod = (evn.wich) ? evn.wich : evn.keyCode;
    console.log(cod);
    if(cod == 8 || cod == 46){
        return true;
    }
    else if(cod >= 48 && cod <= 57){
        return true;
    }
    else{
        return false;
    }
}//onlyNumero