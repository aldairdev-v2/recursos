<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/stylesregistro.css">
    <link rel="shortcut icon" href="../../img/hogar.png">
    <title>Registrarme</title>
</head>
<body>
    <form action="../controll/alta_user.php" method="post">
    <section class="form-register">
            <h3>Formulario registro</h3>
            <input required class="controls" type="text" name="nombre" placeholder="Nombre">
            <input required class="controls" type="text" name="app_paterno" placeholder="Apellido Paterno">
            <input required class="controls" type="text" name="app_materno" placeholder="Apellido Materno">
            <p>Fecha de nacimiento:</p>
            <input required class="controls" type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
            <input required class="controls" type="email" name="email" placeholder="Correo electronico">
            <input required class="controls" type="text" name="tel_celular" placeholder="Numero telefonico">
            <input required class="controls" type="password" name="contrasena" placeholder="Contraseña">
            <input class="botons" type="submit" value="Registrarme" style="cursor: pointer;">
            <p><a href="login.php">¿Ya tengo una cuenta?</a></p>
    </section>
</form>
</body>
</html>


