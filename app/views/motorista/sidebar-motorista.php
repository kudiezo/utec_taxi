<?php require_once APP_DIR . '/helpers/controlo_sessao_login.php'; ?>

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
    <link rel="stylesheet" href="<?= URL . 'public/css/home-utilizadores.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/fontawesome.min.css' ?>">
    <title>Tela do Motorista | Táxis UTEC</title>
</head>

<body>
    <div class="conteudo">
        <nav class="sidebar">
            <div class="logo-sidebar">
                <a href=""><img src="<?= URL . 'public/img/logo/LOGO-UTEC-BRANCO-PNG.png' ?>" alt=""></a><br>
                <span>MOTORISTA</span>
            </div>
            <hr>
            <div class="topo-sidebar">
                <a href="" data-bs-toggle="modal" data-bs-target="#minhaClassificacao"
                    data-bs-whatever="idClassificacao">MINHA CLASSIFICAÇÃO</a>
                <a href="" data-bs-toggle="modal" data-bs-target="#historicoViagem" data-bs-whatever="idViagem">
                    HISTÓRICO DE VIAGEM</a>
                <a href="" data-bs-toggle="modal" data-bs-target="#kmPercorridos" data-bs-whatever="idKm">
                    TOTAL DE KM PERCORRIDOS</a>
            </div>
            <div class="fundo-sidebar">
                <div class="dropdown">
                    <i class="fa-solid fa-user"></i><span>
                        <?= $_SESSION['infoUser']->nome; ?>
                    </span>
                    <ul>
                        <li><a href="<?= URL . 'utilizador/logout'; ?>">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>