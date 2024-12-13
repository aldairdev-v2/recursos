<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylescontacto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/hogar.png">
    <title>Agendar cita</title>
</head>

<body>
    <div class="container">
        <div class="title">Llena el formulario de contacto</div><br>
        <div class="content">
            <form action="bd/controll/alta_cita.php" method="post">
                <div class="gender-details">
                    <span class="gender-title">Ingrese número de contacto</span>
                    <input placeholder = "Teléfono" type="tel" name="telefono_cl" id="telefono_cl"><br>
                    <br>
                    <span class="gender-title">Ingrese email</span>
                    <input placeholder = "email" type="text" name="email" id="email"><br>  
                    <br>
                </div>
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Seleccione la fecha</span>
                        <input type="date"  required name="fecha" id="fecha">
                </div>
                    <div class="input-box">
                        <span class="details">Seleccione la hora</span>
                        <input type="time" required name="hora" id="hora">
                    </div>
                <div class="button">
                    <input type="submit" value="Agendar cita">
                </div>
            </form>
        </div>
    </div>

</body>

</html>