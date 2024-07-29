<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artereciclagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Menu Fixo no Topo -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="imagens/logo.jpg" alt="Artereciclagem Logo" class="d-inline-block align-text-top" style="height: 40px;">
            Artereciclagem
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasMenuLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Sobre Nós</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Registrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Container para o Carrossel -->
<div class="carousel-container">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Imagens do Carrossel -->
            <div class="carousel-item active">
                <img src="imagens/slaide1.png" class="d-block w-100" alt="Produto 1">
            </div>
            <div class="carousel-item">
                <img src="imagens/slider2.png" class="d-block w-100" alt="Produto 2">
            </div>
            <div class="carousel-item">
                <img src="imagens/slaid3.png" class="d-block w-100" alt="Produto 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<section id="objetivo" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Nosso Objetivo</h2>
        <p class="lead text-center">
            O Projeto Artereciclagem tem como objetivo principal promover a sustentabilidade e a consciência ambiental por meio da criação e venda de produtos artesanais e personalizados feitos a partir de materiais recicláveis. Além disso, buscamos incentivar a economia circular, oferecendo produtos exclusivos e de alta qualidade, ao mesmo tempo em que reduzimos o desperdício e contribuímos para a preservação do meio ambiente.
        </p>
    </div>
</section>


<section id="home" class="content-section">
    <div class="container">
        <h1>Bem-vindo à Artereciclagem</h1>
        <p>Transformamos papelão reciclado em produtos criativos e sustentáveis.</p>
        <a href="shop.php" class="btn btn-primary">Explore a Loja</a>
        <a href="contact.php" class="btn btn-secondary">Entre em Contato</a>
    </div>
</section>
<section id="mission-vision-values" class="content-section">
    <div class="container">
        <h2 class="section-title">Missão, Visão e Valores</h2>
        
        <div class="mission">
            <h3>Missão</h3>
            <p>“Oferecer soluções inovadoras e sustentáveis para decoração e organização, através de produtos feitos com papelão reciclado e personalização única. Comprometemo-nos a promover a reutilização de materiais e a criatividade, proporcionando produtos que não apenas atendam às necessidades dos nossos clientes, mas também respeitem o meio ambiente.”</p>
        </div>
        
        <div class="vision">
            <h3>Visão</h3>
            <p>“Ser reconhecida como a principal referência em produtos sustentáveis e personalizados, inovando continuamente no design e na funcionalidade, e inspirando nossos clientes a adotar práticas de consumo mais conscientes e responsáveis. Almejamos expandir nossa presença tanto no mercado físico quanto digital, promovendo a sustentabilidade e o design criativo em todo o Brasil.”</p>
        </div>
        
        <div class="values">
            <h3>Valores</h3>
            <ul>
                <li><strong>Sustentabilidade:</strong> Comprometidos com práticas ecológicas, utilizando materiais reciclados e promovendo a reutilização para reduzir o impacto ambiental.</li>
                <li><strong>Inovação:</strong> Buscamos constantemente soluções criativas e inovadoras que atendam às necessidades dos nossos clientes e estejam alinhadas com as tendências de design e sustentabilidade.</li>
                <li><strong>Qualidade:</strong> Garantimos que todos os nossos produtos sejam fabricados com altos padrões de qualidade, oferecendo durabilidade e satisfação aos nossos clientes.</li>
                <li><strong>Integridade:</strong> Atuamos com transparência e ética em todas as nossas práticas de negócios, garantindo a confiança e o respeito de nossos clientes e parceiros.</li>
                <li><strong>Responsabilidade Social:</strong> Engajamos com a comunidade e promovemos iniciativas que contribuem para o bem-estar social e ambiental.</li>
                <li><strong>Atendimento ao Cliente:</strong> Priorizamos a satisfação do cliente, oferecendo um atendimento personalizado e eficiente, ouvindo suas necessidades e superando suas expectativas.</li>
            </ul>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
