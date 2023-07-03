<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= URL . 'public/css/bem-vindo.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/fontawesome.min.css' ?>">
    <title>Bem-vindo</title>
</head>

<body>
    <div class="conteudo">
        <header>
            <div class="logo">
                <a href="#">
                    <img src="<?= URL . 'public/img/logo/LOGO-UTEC-AMARELO-PNG.png' ?>" alt="">
                </a>
            </div>
            <!-- <div class="slogan-utec">
                <span><em>"VÁ ATÉ A LUA"</em></span>
            </div> -->
            <div class="links-menu-bem-vindo">
                <ul>
                    <li><a href="">PEÇA UMA VIAGEM</a></li>
                    <li><a href="">SEJA UM CONDUTOR</a></li>
                </ul>
            </div>
            <div class="login-icon-link">
                <a href="<?= URL . 'paginas/login' ?>">
                    <i class="fa-solid fa-user"></i>
                    <span>ENTRAR | REGISTRAR</span>
                </a>
            </div>
        </header>

        <div class="corpo">
            <div class="quem-somos">
                <div class="row g-3">
                    <div class="logo-quem-somos col-md-4">
                        <img src="<?= URL . 'public/img/logo/LOGO-UTEC PRETO PNG.png' ?>" alt="">
                    </div>
                    <div class="descricao-quem-somos col-md-8">
                        <h2>O MELHOR SERVIÇO DE TÁXI DA BANDA</h2>
                        <p>TEMOS UMA VARIEDADE DE AUTOMÓVEIS A SUA DISPOSIÇÃO. LUXO, CONFORTO E VELOCIDADE, VOCÊ
                            ENCONTRA AQUI.</p>
                        <p><strong><em>PEÇA JÁ A SUA VIAGEM, HÁ UM MOTORISTA A SUA ESPERA.</em></strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'footer.php';?>