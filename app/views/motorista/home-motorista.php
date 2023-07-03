<?php require_once 'sidebar-motorista.php'; ?>
<div class="corpo">
    <div class="conteudo-corpo">
        <div class="location-destino">
            <span>ENCONTRE A SUA PRESA!</span>
        </div>

        <table class="mapa">
            <?php for ($i = -1; $i < 15; $i++) { ?>
                <tr>
                    <?php for ($j = -1; $j < 15; $j++) { ?>
                        <?php if ($i === -1 || $j === -1) { ?>
                            <td style="background-color: #ffc500;">
                                <?php if ($i === -1) if ($j === -1)
                                    print('x/y');
                                else
                                    print($j);
                                else
                                    print($i); ?>
                            </td>
                        <?php } else { ?>
                            <td>
                                <?php if ($i === 12 && $j === 8) { ?> <i class="fa-solid fa-car-side"></i>
                                <?php } ?>
                                <?php if ($i === 3 && $j === 13) { ?> <i class="fa-solid fa-person"></i>
                                <?php } ?>
                            </td>
                        <?php } ?>


                    <?php } ?>
                </tr>
            <?php } ?>
        </table>

        <div class="opcoes">
            <div class="tempo-estimado">
                <span>ESTA VIAGEM DURARÁ:</span>
                <button class="btn btn-primary">00:00:00</button>
            </div>
            <div class="preco-pagar">
                <span>VOCÊ DEVE RECEBER:</span>
                <button class="btn btn-primary">0.000,00 kz</button>
            </div>
        </div>
        <div class="chamar-carro d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">INICIAR CORRIDA</button>
        </div>
    </div>
</div>
</div>
</body>

</html>