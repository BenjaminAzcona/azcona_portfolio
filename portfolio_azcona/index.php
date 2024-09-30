<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ilustraciones</title>
    <link rel="stylesheet" type="text/css" href="css/miestilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" href="logo.jpg">
</head>
<body background="images/fondo.png">
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="index.html">
                    <img src="images/logo.png" alt="logo" width="130" height="80">
                </a>
            </div>
            <nav id="nav">
                <a href="index.php">INICIO</a>
                <a href="ilustraciones/index.php">ILUSTRACIONES</a>
                <a href="animaciones/index.php">ANIMACIONES</a>
                <a href="contacto/index.php">CONTACTO</a>
            </nav>
            <div class="nav-responsive">
                <i class="fa-solid fa-bars" id="menu-toggle"></i>
            </div>
        </header>
    </div>

    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="images/carados.png" alt="cara" width="1400" height="63">
            </div>
        </div>
    </section>
    <h1>PORTFOLIO AZCONA</h1>
    <br>
    <br>

    <section id="sobremi" class="sobremi">
        <div class="imagen">
            <img src="images/benja.png" alt="placeholder 1" width="350" height="400">
        </div> 
        <div class="contenido-seccion">
            <h2>Sobre Mi</h2>
            <br>
            <p> Hola, soy Benjamin Azcona, bienvenido a mi pagina</p>
            <p>Soy un estudiante de Dise&ntilde;o y Animaci&oacute;n</p>
            <p>Tengo 19 a&ntilde;os y soy de CABA</p>
            <p>Este es mi Portfolio</p>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <a href="https://www.instagram.com/benjiboy_1001/" class="footer-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://mail.google.com/mail/u/0/?ogbl#inbox" class="footer-icon"><i class="fas fa-envelope"></i></a>
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var nav = document.getElementById('nav');
            nav.classList.toggle('active');
        });
    </script>
    <script src="js/script.js"></script>
    <br>
    <br>
    <br>
</body>
</html>
