function init(){
   var prestamo   = document.getElementById("saldo");
   var inter      = document.getElementById("interesA");
   var meses      = document.getElementById("meses")
   var intM       = document.getElementById("intM");
   var pago       = document.getElementById("pago");
   var tabla      = document.getElementById("btTabla");
   var eliminado  = document.getElementById("btEliminar");

   tabla.addEventListener("click",gTabla,false);

   function gTabla(){
// Obtener la referencia del elemento body
 var body = document.getElementsByTagName("body")[0];
 // Crea un elemento <table> y un elemento <tbody>
 var tabla = document.createElement("table");
 tabla.setAttribute("id", "myTable");
 tabla.setAttribute("style","margin:auto;");
 var tblBody = document.createElement("tbody");
 var encabezado=document.createElement("thead");
 var titulo = document.createElement("caption");
 var tTitulo = document.createTextNode("Tabla de amortización");
 titulo.appendChild(tTitulo);
 tabla.appendChild(titulo)
   
 var fE = document.createElement("tr");//fila de encabezados
 var texto =["MES","SALDO INICIAL","INTERESES","ABONO","MENSUALIDAD","SALDO FINAL"];
 //Array{}
 for (var j = 0; j < texto.length; j++) {
 var celda = document.createElement("th");
 celda.setAttribute("style","text-align:center");
 var textoCelda = document.createTextNode(texto[j]);
 celda.appendChild(textoCelda);
 fE.appendChild(celda);
 }//for encabezados
 encabezado.appendChild(fE);//agregar la fila a la etiquete thead
 
 tabla.appendChild(encabezado);//agregar la etiqueta thead a la tabla

 var cf= prestamo.value/meses.value;//cuota fija
 var iM= inter.value/12/100;
 pago.innerText=cf.toFixed(2);
 intM.innerText= (iM*100).toFixed(2)+"%";
 var sI = 0;//saldo inicial
 var sF = 0;//saldo final
 var mensualidad =0;
 var intereses =0;
 var tM=0;
 var tI=0;
 var tF=0; 
 sI = prestamo.value;
 sF = prestamo.value;

    for (var i = 1; i <=parseInt(meses.value); i++) {
        var hilera = document.createElement("tr");
       // hilera.setAttribute("class","color");
        sI = sF;
        intereses = sI * iM;
        mensualidad = cf + intereses;
        sF = sI-cf;
        tM += mensualidad; // mensualidad+=mensualidad tM = tM +mensualidad tM = mensualidad + mensualidad
        tI += intereses;
        tF += sF;
        var datos=[i,sI,intereses,cf,mensualidad,sF];
        
        for (var j = 0; j < datos.length; j++) {
        var celda = document.createElement("td");
        var textoCelda = document.createTextNode(datos[j]);
        celda.appendChild(textoCelda);
        hilera.appendChild(celda);
        }//for para las columna
        tblBody.appendChild(hilera);
}//for de las mensualidades
        // posiciona el <tbody> debajo del elemento <table>
        tabla.appendChild(tblBody);
        var tblFoot = document.createElement("tfoot");
        var hilera = document.createElement("tr");
        var datos=["TOTALES"," ",tI," ",tM,tF];
        for (var j = 0; j < datos.length; j++) {
        var celda = document.createElement("th");
        var textoCelda = document.createTextNode(datos[j]);
        celda.appendChild(textoCelda);
        hilera.appendChild(celda);
        }//for pie de pagina
        tblFoot.appendChild(hilera);
        tabla.appendChild(tblFoot);
        // appends <table> into <body>
        body.appendChild(tabla);
        // modifica el atributo "border" de la tabla y lo fija a "2";
        tabla.setAttribute("border", "2");
}//gTabla
  
eliminado.addEventListener("click",eliminar,false);
function eliminar () {
 var body = document.getElementsByTagName("body")[0];
 body.removeChild(document.getElementById("myTable"));
meses.value="";
prestamo.value="";
inter.value="";
pago.innerText="";//parrafos
 intM.innerText="";
prestamo.focus();
}
}//init

window.onload=function(){
   init();
};