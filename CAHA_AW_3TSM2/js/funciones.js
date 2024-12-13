function init(){
   var tabla  = document.getElementById("cboTabla");
   var inicio = document.getElementById("cboInicio");
   var fin    = document.getElementById("cboFin");
   var btnM   = document.getElementById("btnM");
   var res    = document.getElementById("resultado");
   btnM.addEventListener("click",resul,false);

   function resul(){
       let r = "";
       for(i=inicio.value;i<=fin.value;i++)
  r += tabla.value+"*"+i+"="+(tabla.value * i) + "<br>";
  res.innerHTML=r;
   }//resul

   let cad    = "<option>[FIN]</option>";
  
   for(i=1;i<=15;i++)
     cad += "<option>"+i+"</option>";

  fin.innerHTML=cad;

  for(i=0;i<15;i++){
    var opcion = document.createElement("option");
    opcion.value= i+1;
    opcion.text = i+1;
    inicio.appendChild(opcion); 
   }//for
   
     for(i=1;i<=15;i++){
       var opcion = document.createElement("option");
       opcion.value= i;
       opcion.text = i;
       tabla.appendChild(opcion); 
    }//for

}//init


window.onload=function(){
     init();
};//window