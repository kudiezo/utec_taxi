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
                            <th scope="col">Cliente</th>
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
                        <tr>
                            <th id="viagemID" scope="row">1</th>
                            <td id="motorista">Garcia Babe</td>
                            <td id="viatura">LD-45-12</td>
                            <td id="origem">Talatona</td>
                            <td id="destino">Caxito</td>
                            <td id="distancia">5 KM</td>
                            <td id="inicio">12:37:23</td>
                            <td id="fim">16:12:45</td>
                            <td id="duracao">4 horas</td>
                            <td id="quantia">13.657,99 kz</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="minhaClassificacao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MINHA CLASSIFICAÇÃO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="estrelas">
                    <div class="rating">
                        <span class=""><i class="fas fa-star"></i></span>
                        <span class=""><i class="fas fa-star"></i></span>
                        <span class=""><i class="fas fa-star"></i></span>
                        <span class=""><i class="fas fa-star"></i></span>
                        <span class=""><i class="fas fa-star"></i></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kmPercorridos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">TOTAL DE KM PERCORRIDOS</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="kilomPercorridos">
                    <span>0000 KM</span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?= URL . 'public/js/bootstrap.bundle.min.js' ?>"></script>
<script src="<?= URL . 'public/js/home-motorista.js' ?>"></script>

</body>

</html>