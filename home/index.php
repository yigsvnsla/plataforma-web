<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
    session_start();

    echo "<h1>bienvenido ".$_SESSION['username']."</h1>";

    ?>
</body>
</html>