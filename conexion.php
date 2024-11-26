<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname="sql213.infinityfree.com";
        $username="si0_37767159";
        $password="victor7510";
        $bd="if0_37767159_tienda3B";
        $conexion=mysqli_connect($hostname,$username,$password,$bd);
         
        if ($conexion) {
            echo("Conectado Correctamente");
        }
        else {
            echo("No se pudo conectar correctamente");
        }
    ?>

</body>
</html>