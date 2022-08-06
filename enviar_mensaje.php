<?php
$nombre_form = $_POST['nombre'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

// $conexion = mysqli_connect("localhost", "id18161574_imguili", "BBI+r33!Qimj<d^]", "id18161574_database1") or exit("No se pudo conectar con la base de datos");

$conexion = mysqli_connect("localhost", "root", "", "portfolio") or exit("No se pudo conectar con la base de datos");

mysqli_query($conexion, "INSERT INTO mensajes VALUES(DEFAULT, '$nombre_form', '$email_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: ./contacto.php?env=ok");