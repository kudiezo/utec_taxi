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
    <link rel="stylesheet" href="<?= URL . 'public/css/home-cliente.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?= URL . 'public/fontawesome/css/fontawesome.min.css' ?>">
    <title>Bem-vindo</title>
</head>

<body>
    <div class="conteudo">
        <?= require_once 'navbar-cliente.php'; ?>

        <div class="corpo">
            <div class="conteudo-corpo">
                <div class="location-destino">
                    <span>INFORME A SUA LOCALIZAÇÃO!</span>
                    <span>PARA ONDE DESEJA IR?</span>
                </div>


                <table class="mapa">
                    <?php for ($i = 0; $i < 15; $i++) { ?>
                        <tr>
                            <?php for ($j = 0; $j < 15; $j++) { ?>
                                <td>
                                    <?php if ($i === 12 && $j === 8) { ?> <i class="fa-solid fa-car-side"></i>
                                    <?php } ?>
                                    <?php if ($i === 1 && $j === 5) { ?> <i class="fa-solid fa-car-side"></i>
                                    <?php } ?>
                                    <?php if ($i === 8 && $j === 3) { ?> <i class="fa-solid fa-motorcycle"></i>
                                    <?php } ?>
                                    <?php if ($i === 3 && $j === 13) { ?> <i class="fa-solid fa-person"></i>
                                    <?php } ?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>
                <div class="opcoes">
                    <div class="escolher-carro">
                        <span>FAÇA A SUA ESCOLHA:</span>
                        <select id="tipo-escolha" class="form-select" required>
                            <option value="" selected disabled>...</option>
                            <option>Táxi mais próximo</option>
                            <option>Selecionar táxi específico</option>
                        </select>
                    </div>
                    <div class="tempo-estimado">
                        <span>SUA VIAGEM DURARÁ:</span>
                        <button class="btn btn-primary">00:00:00</button>
                    </div>
                    <div class="preco-pagar">
                        <span>QUANTIA A PAGAR:</span>
                        <button class="btn btn-primary">0.000,00 kz</button>
                    </div>
                </div>
                <div class="chamar-carro d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button">CHAMAR CARRO</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>