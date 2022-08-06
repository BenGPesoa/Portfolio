<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&family=Dancing+Script&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <header>
        <h1>Ben Pesoa</h1>
        <h2>Portfolio</h2>
    </header>
    <nav>
        <ul>
            <li><a href="./portfolio.html">Inicio</a></li>
            <li><a href="./curriculum.html">Curriculum</a></li>
            <li><a href="./trabajos.html">Trabajos</a></li>
            <li><a href="./contacto.php">Contacto</a></li>
            <li><a class="activo" href="./mensajes.php">Mensajes</a></li>
        </ul>
    </nav>
    <main>
        <h3>Mensajes</h3>
        <?php
        //  $conexion = mysqli_connect("localhost", "id18161574_imguili", "BBI+r33!Qimj<d^]", "id18161574_database1") or exit("No se pudo conectar con la base de datos"); 

        $conexion = mysqli_connect("localhost", "root", "", "portfolio") or exit("No se pudo conectar con la base de datos");

        $sql = "SELECT id_mensaje, nombre, email, mensaje FROM mensajes";

        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="mensajes">
                    <?php
                    echo "Mensaje # " . $row["id_mensaje"] . "<br><br>Nombre: " . $row["nombre"] .  "<br>E-mail: " . $row["email"] . " <br><br>" . $row["mensaje"];
                    ?>
                </div>
        <?php
            }
        } else {
            echo "No Hay mensajes todavía.";
        }

        mysqli_close($conexion);
        ?>
    </main>
    <footer>
        <p>Design by Ben Pesoa 2022</p>
    </footer>

</body>

</html>