<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ilustraciones</title>
    <link rel="stylesheet" type="text/css" href="../css/miestilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" href="logo.jpg">
</head>
<body background="../images/fondo.png">
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="../index.php">
                    <img src="../images/logo.png" alt="logo" width="130" height="80">
                </a>
            </div>
            <nav id="nav">
                <a href="../index.php">INICIO</a>
                <a href="../ilustraciones/index.php">ILUSTRACIONES</a>
                <a href="../animaciones/index.php">ANIMACIONES</a>
                <a href="../contacto/index.php">CONTACTO</a>
            </nav>
            <div class="nav-responsive">
                <i class="fa-solid fa-bars" id="menu-toggle"></i>
            </div>
        </header>
    </div>
    <br>
    <br>
    <div class="contenido-banner">
        <div class="contenedor-img">
            <img src="../images/caraanim.png" alt="cara" width="1300" height="61">
    </div>
    <br>
    <br>
    <h1>ANIMACIONES</h1>
    
    <video src="../images/anim.mp4" width="450" height="370" controls></video>
    <br>
    <br>
    <br>
    <footer>
        <div class="footer-container">
            <a href="https://www.instagram.com/benjiboy_1001/" class="footer-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://mail.google.com/mail/u/0/?ogbl#inbox" class="footer-icon"><i class="fas fa-envelope"></i></a>
        </div>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var nav = document.getElementById('nav');
            nav.classList.toggle('active');
        });
    </script>
    <script src="../js/script.js"></script>
</body>
</html>
