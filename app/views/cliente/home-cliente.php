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
        <div class="opcoes herdou-opcoes">
            <div class="tempo-estimado">
                <span>DISTÂNCIA MOTORISTA-CLIENTE:</span>
                <button class="btn btn-primary">0 KM</button>
            </div>
            <div class="preco-pagar">
                <span>DISTÂNCIA MOTORISTA-CLIENTE:</span>
                <button class="btn btn-primary">0 KM</button>
            </div>
        </div>
        <div class="chamar-carro d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">CHAMAR CARRO</button>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="historicoViagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MEU HISTÓRICO DE VIAGEM</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Motorista</th>
                            <th scope="col">Viatura</th>
                            <th scope="col">Origem</th>
                            <th scope="col">Destino</th>
                            <th scope="col">Distância</th>
                            <th scope="col">Início</th>
                            <th scope="col">Fim</th>
                            <th scope="col">Duração</th>
                            <th scope="col">Quantia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            require_once '../../controllers/Clientes.php';
                            $cliente = new Clientes();
                            $res = $cliente->getHistoricoViagem($_['infoUser']->email);
                            foreach ($res as $linha) {
                        ?>
                        <tr>
                            <th id="viagemID" scope="row">1</th>
                            <td id="motorista"><?= $linha->email_motorista ?></td>
                            <td id="viatura">LD-45-12</td>
                            <td id="origem"><?= $linha->coordenadas_origem ?></td>
                            <td id="destino"><?= $linha->coordenadas_destino ?></td>
                            <td id="distancia">5 KM</td>
                            <td id="inicio"><?= $linha->data_hora_ini ?></td>
                            <td id="fim"><?= $linha->data_hora_fim ?></td>
                            <td id="duracao">4 horas</td>
                            <td id="quantia"><?= $linha->custo_real ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= URL . 'public/js/bootstrap.bundle.min.js' ?>"></script>
<script src="<?= URL . 'public/js/home-cliente.js' ?>"></script>
</body>

</html>