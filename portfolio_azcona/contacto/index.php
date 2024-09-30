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
    <div class="contenido-bannerdos">
        <div class="contenedor-img">
            <img src="../images/caracont.png" alt="cara" width="1290" height="45">
    </div>
    <br>
    <br>
    <h1>CONTACTO</h1>
    <br>
    <br>
    <div class="form">
    <form action="../process_contact.php" method="POST">
        <p>
            <label for="fname">Nombre:</label>
            <input type="text" id="fname" name="fname" required minlength="3">
        </p>
        <p>
            <label for="lname">Apellido:</label>
            <input type="text" id="lname" name="lname" required minlength="3">
        </p>
        <p>
            <label for="sexo">Sexo:</label>
            <input type="radio" id="r1" name="sexo" value="hombre"><label for="r1">Hombre</label>
            <input type="radio" id="r2" name="sexo" value="mujer"><label for="r2">Mujer</label>
        </p>
        <p>
            <label for="mail">Email:</label>
            <input type="email" id="mail" name="mail" required minlength="8">
        </p>
        <p>
            <label for="desc">Descripción:</label>
            <textarea name="desc" id="desc" cols="30" rows="2"></textarea>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

    </div>
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
