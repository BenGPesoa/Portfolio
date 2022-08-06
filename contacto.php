<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Ben Pesoa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100&family=Dancing+Script&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/styles.css">
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
            <li><a class="activo" href="./contacto.php">Contacto</a></li>
        </ul>
    </nav>
    <main>
    <?php
            if(isset ($_GET['env'])) {?> 
                <div class="msg_ok">
                    <h3>Mensaje enviado con exito.</h3>
                </div>
            <?php
            }?>
        <div class="contacto">
            <h3>Contacto</h3> 
            <p>Puede contactarme por email, Whatsapp y Linkedin, o dejar un mensaje en el siguiente formulario.</p>
            <div class="redes">
            <a target="blank" href="mailto:benpesoa@gmail.com"><img src="img/email.png" alt="Email"></a>
            <a target="blank" href="http://www.linkedin.com/in/ben-pesoa"><img src="img/linkedin.png" alt="Linkedin"></a>
            <a target="blank" href="https://api.whatsapp.com/send?phone=5491133617246"><img src="img/whatsapp.png" alt="whatsapp"></a>
            </div>
            <div class="form">
                <form action="./enviar_mensaje.php" method="POST">
                    <input type="text" name="nombre" class="campo_form" placeholder="Nombre">                    
                    <input type="email" name="email" class="campo_form" placeholder="Correo electrónico">                  
                    <textarea name="mensaje" id="" cols="30" rows="10" class="campo_form" placeholder="mensaje"></textarea>
                    <input type="submit" class="btn_form" value="Enviar">
                </form>                
            </div>   
            <?php
            if(isset ($_GET['us'])) {?> 
                <div class="btn_master">
                    <a href="./mensajes.php">Mensajes</a>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
    <footer>
        <p>Design by Ben Pesoa 2022</p>
    </footer>
    
</body>
</html>