<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilustraciones</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/miestilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" href="logo.jpg">

    <style>
        .carousel-item img {
            max-width: 80%; /* Ajusta el tamaño de las imágenes al 80% del ancho del contenedor */
            max-height: 400px; /* Limita la altura máxima a 400px */
            margin: 0 auto; /* Centra las imágenes */
            object-fit: contain;
        }
    </style>
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
    
    <br><br>

    <div class="contenido-banner">
        <div class="contenedor-img">
            <img src="../images/carailus.png" alt="cara" width="1300" height="63">
        </div>
    </div>

    <br><br>

    <h1>ILUSTRACIONES</h1>

    <!-- Bootstrap Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/gula.png" class="d-block" alt="Ilustración 1">
            </div>
            <div class="carousel-item">
                <img src="../images/poster.png" class="d-block" alt="Ilustración 2">
            </div>
            <div class="carousel-item">
                <img src="../images/envy.png" class="d-block" alt="Ilustración 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br><br>

    <footer>
        <div class="footer-container">
            <a href="https://www.instagram.com/benjiboy_1001/" class="footer-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://mail.google.com/mail/u/0/?ogbl#inbox" class="footer-icon"><i class="fas fa-envelope"></i></a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Menu responsive
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var nav = document.getElementById('nav');
            nav.classList.toggle('active');
        });
    </script>
</body>
</html>
