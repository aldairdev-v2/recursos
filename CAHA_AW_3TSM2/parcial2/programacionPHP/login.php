<?php
   if(isset($_GET["m"])){
       echo "<script>alert('USUARIO Y/O CONTRASEÑA NO VALIDOS')</script>";
   }
?>

<!DOCTYPE html>
<html>
      <head>
          <title>LOGIN</title>
          <meta charset="UTF-8">
          <link rel="shortcut icon" href="../../img/profile.png">
 
          <link rel="stylesheet" href="../../css/bootstrap.css">
          <link rel="stylesheet" href="../../css/style.css">

          <style>
              .centrar{
                  width: 350px;
                  margin: auto;
                  margin-top: 130px;
                  border: 1px solid red;
                  text-align: center;
                  padding-left: 60px;
              }
          </style>
      </head> 
      <body> 
          <div class="container fondoo">
              <form method="post" action="validar_login.php">
                  <fieldset class="centrar">
                      <legend>Login</legend>
                      <table>
                          <tr>
                              <td>
                                  <input autofocus require id="txUsuario" name="txUsuario" class="form-control" type="text" placeholder="USUARIO">
                                  <input id="txPassword" name="txPassword" class="form-control" type="password" placeholder="CONTRASEÑA">
                                  <input id="btAceptar"  name="btAceptar" type="submit" class="btn btn-primary" value="ACEPTAR">
                              </td>
                          </tr>        
              </form>
          </div>   
       
      </body>
</html>