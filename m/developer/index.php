<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos 1</title>
    <link rel="stylesheet" href="/estilos/index.css">
</head>
<body>
    <div class="caja">
        <h1 class="titulo">Base de Datos 1</h1>
        <p class="parrafo">Carga de Datos en la DB con php html y css</p>
        <form action="datos.php" method="post">
            <p>Nombre:</p>
            <input type="text" name="nombre">
            <p>Apellido:</p>
            <input type="text" name="apellido">
            <p>Correo:</p>
            <input type="text" name="correo">
            <p>Mensaje:</p>
            <input class="mensaje" type="text" name="mensaje">
            <input class="boton" type="submit" value="Mandar Datos">
        </form>
    </div>
</body>
</html>