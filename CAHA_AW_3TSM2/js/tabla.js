console.log("Tabla");

var i   = document.getElementById("cbInicio");
var f   = document.getElementById("cbFin");
var tb  = document.getElementById("cbTab");
var btT = document.getElementById("btVer");
var btT2 = document.getElementById("btVer2");
var btT3 = document.getElementById("btVer3");
var m   = document.getElementById("resultado");

btT3.addEventListener("click", () => {
    let r="";
    let ini   = parseInt (i.value);//variables temporales cadena a enteros numéricos
    let fi    = parseInt (f.value);
    let tabla = parseInt (tb.value);
    for(j=ini; j!=fi;){
        r += tabla + " * " + j + " = " + (tabla*j) + "<br>";
    
        if(ini<fi){
            j++;
        }
        else{
            j--;
        }
    }
    r += tabla + " * " + j + " = " + (tabla*j) + "<br>";
    
    m.innerHTML = r;
});//click btT3

btT2.addEventListener("click", () => {
    let r="";
    let ini   = parseInt (i.value);//variables temporales cadena a enteros numéricos
    let fi    = parseInt (f.value);
    let tabla = parseInt (tb.value);
    if(ini<fi){
        for(j=ini; j<=fi; j++){
            r += tabla + " * " + j + " = " + (tabla*j) + "<br>";   
        }
    }    
    else{
        for(j=ini; j>=fi; j--){
            r += tabla + " * " + j + " = " + (tabla*j) + "<br>";
            m.innerHTML = r;
        }
    }
});//click btT2

btT.addEventListener("click", () => {
    let r="";
    let ini   = parseInt (i.value);//variables temporales cadena a enteros numéricos
    let fi    = parseInt (f.value);
    let tabla = parseInt (tb.value);
    for(j=ini; j<=fi; j++){
        r += tabla + " * " + j + " = " + (tabla*j) + "<br>";
        m.innerHTML = r;
    }
});//click btT

window.addEventListener("load", () => {
    for(j=1; j<=15; j++){
        let opcion = document.createElement('option');//variable local, crear option
        opcion.text=j;//agregar contenido al combo
        i.appendChild(opcion);
    }//for j incio
    for(j=1; j<=15; j++){
        let opcion = document.createElement('option');//variable local, crear option
        opcion.text=j;//agregar contenido al combo
        f.appendChild(opcion);
    }//for j fin
    for(j=1; j<=15; j++){
        let opcion = document.createElement('option');//variable local, crear option
        opcion.text=j;//agregar contenido al combo
        tb.appendChild(opcion);
    }//for j tabla
});//load window