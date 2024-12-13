
function init(){
    var u   = document.getElementById("usuario");
    var c   = document.getElementById("contrasena");
    var btE = document.getElementById("btE");

    btE.addEventListener("click",validar);

    function validar(){
       let usuarios= [["admin","1234"],
                               ["s1","abc"],
                               ["s2","ab12"]];
     
       for(i=0;i<usuarios.length;i++)
        if(u.value === usuarios[i][0] 
            && c.value===usuarios[i][1] )                       
            document.location ="tabla_a.html";
          else
              b=false;       
        
        if(!b)  {
            alert("Errrrror");
            u.value="";
            c.value="";
            u.focus();  
           }  else
           
           document.location ="tabla_a.html";
          
          
          
          /*
                               
        if( ("admin" == u.value && "123" == c.value) ||
             ("s1" == u.value && "abc" == c.value ) ||
             ("s2" == u.value && "ab12" == c.value )
             )
             document.location ="tabla_a.html";
         else{
             alert("Error");
             u.value="";
             c.value="";
             u.focus();  
            }
            */

    }//validar

}//init

window.onload=function(){
    init();
};