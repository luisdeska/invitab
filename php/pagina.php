<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de conexion a la BD</title>
</head>
<body>
    <?php
        include_once("conexion.php");
        CConection::Conexion();
    ?>
</body>
</html>