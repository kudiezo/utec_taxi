<?php require_once APP_DIR . '/helpers/verificacao_sessao.php'; ?>

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
    <link rel="stylesheet" href="<?= URL . 'public/css/login-sign.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/fontawesome.min.css' ?>">
    <title>Sign Up</title>
</head>

<body>
    <div class="conteudo">

        <div class="corpo">
            <div class="conteudo-sign">
                <div class="cabecalho-form">
                    <a href="<?= URL . 'paginas/' ?>"><img
                            src="<?= URL . 'public/img/logo/LOGO-UTEC-AMARELO-PNG.png' ?>" alt=""></a>
                    <span>FAÇA O SEU REGISTO</span>
                </div>
                <form class="row g-3" method="post" action="<?= URL . 'utilizador/cadastro'; ?>">
                    <div class="col-md-6">
                        <span>REGISTE-SE COMO:</span>
                    </div>
                    <div class="col-md-6">
                        <select id="tipoCliente" class="form-select" required>
                            <option value="" selected disabled>Selecione o tipo de utilizador</option>
                            <option value="Cliente">Cliente</option>
                            <option value="Motorista">Motorista</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="nomeCompleto" class="form-label">Nome Completo</label>
                        <input type="text" name="nome" class="form-control" id="nomeCompleto" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tipoMotorista" class="form-label">Tipo</label>
                        <select id="tipoMotorista" name="tipoMotorista" class="form-select" disabled required>
                            <option value="" selected disabled>Selecione o tipo de motorista</option>
                            <option value="Empresa">Empresa</option>
                            <option value="Particular">Particular</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="nomeEmpresa" class="form-label">Nome empresa</label>
                        <input type="text" name="nomeEmpresa" class="form-control" id="nomeEmpresa" disabled required>
                    </div>
                    <div class="col-12">
                        <label for="morada" class="form-label">Morada</label>
                        <input type="text" name="morada" class="form-control" id="morada" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputData" class="form-label">Data de nascimento</label>
                        <input type="date" name="data" class="form-control" id="inputData" required>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Palavra-passe</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="col-md-6">
                        <label for="confPassword" class="form-label">Confirmar palavra-passe</label>
                        <input type="password" name="confPassword" class="form-control" id="confPassword" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">CADASTRAR</button>
                    </div>
                    <span>Já possui uma conta? Entre <a class="aqui" href="<?= URL . 'paginas/login' ?>">aqui</a>.</span>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= URL . 'public/js/sign-up.js' ?>"></script>

    <?php include_once 'footer.php'; ?>