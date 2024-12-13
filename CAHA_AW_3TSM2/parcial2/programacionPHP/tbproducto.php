<?php

?>
<!DOCTYPE html>
<html>
      <head>
          <title>PRODUCTO</title>
          <meta charset="UTF-8">
          <link rel="shortcut icon" href="../../img/profile.png">
 
          <link rel="stylesheet" href="../../css/bootstrap.css">
          <link rel="stylesheet" href="../../css/style.css">

          <style>
              h1{
                  text-align: center;
              }
              hr{
                  border-top: 5px solid black;
              }
          </style>
      </head>

      <body>
          <div class="container fondoo">
          <form>
              <h1>PRODUCTO🛒</h1>
              <hr>
              <table border= "1" class="table table-bordered table_prod">
                  <tr><!--Fila 1-->
                      <td><b>PRECIO:</b></td>
                      <td><b>CANTIDAD:</b></td>
                      <td><b>DESCRIPCIÓN:</b></td>
                  </tr>
                  <tr><!--Fila 2-->
                      <td><input autofocus class="form-control" type="text"></td>
                      <td><input class="form-control" type="text"></td>
                      <td><input class="form-control" type="text"></td>
                  </tr>
                  <tr><!--Fila 3-->
                      <td><input type="btn" class="btn btn-primary" value="ACTUALIZAR">
                          <input type="btn" class="btn btn-primary" value="ELIMINAR">
                      </td>
                      <td><input type="btn" class="btn btn-primary" value="CONSULTAR"></td>
                      <td><input type="btn" class="btn btn-primary" value="MODIFICAR">
                      </td>
                  </tr>

              </table>


          </form>
          </div>

      </body>

<!--🗑️💾🔎✍️📝📋-->
</html>

