<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../public/css/bem-vindo.css">
    <link rel="stylesheet" href="../../../public/css/login-sign.css">
    <link rel="stylesheet" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../../public/fontawesome/css/fontawesome.min.css">
    <title>Bem-vindo</title>
</head>

<body>
    <div class="conteudo">

        <div class="corpo">
            <div class="conteudo-sign">
                <div class="cabecalho-form">
                    <a href=""><img src="../../../public/img/logo/LOGO-UTEC-AMARELO-PNG.png" alt=""></a>
                    <div class="row g-3">
                        <div class="col-md-7">
                            <span>REGISTE-SE COMO CLIENTE</span>
                        </div>
                        <div class="col-md-5">
                            <select id="tipoCliente" class="form-select" required>
                                <option value="" selected disabled>Selecione o tipo de utilizador</option>
                                <option>Cliente</option>
                                <option>Motorista</option>
                            </select>
                        </div>
                    </div>
                </div>
                <form class="row g-3" method="post">
                    <div class="col-md-6">
                        <label for="nomeCompleto" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nomeCompleto" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tipoMotorista" class="form-label">Tipo</label>
                        <select id="tipoMotorista" class="form-select" required>
                            <option value="" selected disabled>Selecione o tipo de motorista</option>
                            <option>Empresa</option>
                            <option>Particular</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="nomeEmpresa" class="form-label">Nome empresa</label>
                        <input type="email" class="form-control" id="nomeEmpresa" required>
                    </div>
                    <div class="col-12">
                        <label for="morada" class="form-label">Morada</label>
                        <input type="text" class="form-control" id="morada" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputData" class="form-label">Data de nascimento</label>
                        <input type="date" class="form-control" id="inputData" required>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Palavra-passe</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <div class="col-md-6">
                        <label for="confPassword" class="form-label">Confirmar palavra-passe</label>
                        <input type="password" class="form-control" id="confPassword" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">CADASTRAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="mt-3">
        <span>@ UTEC 2023. TODOS OS DIREITOS RESERVADOS.</span>
        <div class="icons-social-media">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
    </footer>
</body>

</html>