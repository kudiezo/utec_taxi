        <?php require_once 'sidebar-cliente.php'; ?>

        <div class="corpo">
            <div class="conteudo-corpo">
                <div class="location-destino">
                    <span>INFORME A SUA LOCALIZAÇÃO!</span>
                    <span>PARA ONDE DESEJA IR?</span>
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
                                        <?php if ($i === 1 && $j === 5) { ?> <i class="fa-solid fa-car-side"></i>
                                        <?php } ?>
                                        <?php if ($i === 8 && $j === 3) { ?> <i class="fa-solid fa-motorcycle"></i>
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
                    <div class="escolher-carro">
                        <span>FAÇA A SUA ESCOLHA:</span>
                        <select id="tipo-escolha" class="form-select" required>
                            <option value="" selected disabled>...</option>
                            <option value="1">Táxi mais próximo</option>
                            <option value="2">Selecionar táxi específico</option>
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