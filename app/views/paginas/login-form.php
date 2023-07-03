<!DOCTYPE html>
<html lang="en">

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
    <title>Bem-vindo</title>
</head>

<body>
    <div class="conteudo">

        <div class="corpo">
            <div class="conteudo-login">
                <div class="cabecalho-form">
                    <a href="<?= URL . 'paginas/'?>"><img src="<?= URL . 'public/img/logo/LOGO-UTEC-AMARELO-PNG.png' ?>" alt=""></a>
                    <span>ENTRAR NA SUA CONTA</span>
                </div>
                <form class="row g-3" method="post">
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Palavra-passe</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">ENTRAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <span>@ UTEC 2023. TODOS OS DIREITOS RESERVADOS.</span>
        <div class="icons-social-media">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
    </footer>
</body>

</html>