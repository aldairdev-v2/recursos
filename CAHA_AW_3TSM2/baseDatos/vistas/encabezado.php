<!doctype html>
<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Plantilla básica para Bootstrap">
   
    <title>Plantilla inicial para Boostrap</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
   
<style>
    
body{
  padding-top: 70px;
}
</style>
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="" >Control de Asistencia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miNavbar" aria-controls="miNavbar" aria-expanded="false" aria-label="Mostrar u ocultar menú">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menuDesplegable" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USUARIO</a>
                    <div class="dropdown-menu" aria-labelledby="menuDesplegable">
                        <a class="dropdown-item" href="v_alumno.php">ESTUDIANTE</a>
                        <a class="dropdown-item" href="v_docente.php">DOCENTE</a>
                    </div>
                </li>
            </ul>
            
        </div>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
       