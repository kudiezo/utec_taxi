<?php
/*
if (session_status() !== PHP_SESSION_ACTIVE) {
    //session_name("UTEC");
    session_start();
}
if (!isset($_SESSION['username'])) {
    header("Location: " . '/Alpha_Outdoors/index.php?op=login');
}
$nomeProjecto = '/' . session_name();
*/
//require_once $nomeProjecto . '/constantes/nomeProjecto.php';
?>

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
    <link rel="stylesheet" href="<?= URL . 'public/css/home-cliente.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/fontawesome.min.css' ?>">
    <title>Tela do Cliente | Táxis UTEC</title>
</head>

<body>
    <div class="conteudo">
        <nav class="sidebar">
            <div class="logo-sidebar">
                <a href=""><img src="<?= URL . 'public/img/logo/LOGO-UTEC-BRANCO-PNG.png' ?>" alt=""></a><br>
                <span>CLIENTE</span>
            </div>
            <hr>
            <div class="topo-sidebar">
                <a href="">MÉTODO DE PAGAMENTO</a>
                <a href="">MEU ENDEREÇO</a>
                <a href="">CLASSIFICAÇÃO</a>
                <a href="">HISTÓRICO DE VIAGEM</a>
            </div>
            <div class="fundo-sidebar">
                <div class="dropdown">
                    <i class="fa-solid fa-user"></i><span>Garcia Babe</span>
                    <ul>
                        <li><a href="#">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>