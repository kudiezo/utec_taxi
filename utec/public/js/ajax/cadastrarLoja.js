$(document).ready(function () {
    
    $('#btn-cadastrarLoja').click(function (event) {
        event.preventDefault();
        
        var passoSeguinte = "<div class='text-center mb-4'><p class='lead'>Informações da Empresa</p> <p class='lead font-weight-normal'>Qual é o nome da Empresa?</p>";
        passoSeguinte += "</div>";

        passoSeguinte += "<span id='msgInputNomeEmpresa' class='text-danger'></span>";
        passoSeguinte += "<div class='form-label-group'>";
        passoSeguinte += "<input type='text' id='nomeEmpresa' name='nomeEmpresa' class='form-control' placeholder='Nome da Empresa' required autofocus autocomplete='off'>";
        passoSeguinte += "<label for='nomeEmpresa'>Nome da Empresa</label>";        
        passoSeguinte += "</div>";

        passoSeguinte += "<div class='custom-control custom-checkbox mb-4'>";
        passoSeguinte += "<input type='checkbox' id='checkInformal' name='checkInformal' class='custom-control-input' value='1'>";
        passoSeguinte += "<label class='custom-control-label' for='checkInformal'>É uma empresa formal?</label>";    
        passoSeguinte += "</div>";

        passoSeguinte += "<p id='msgResultCadastroLoja' class='text-danger'></p>";
        passoSeguinte += "<button id='btn-cadastrarEmpresa' class='btn btn-lg btn-primary btn-block' onclick='cadastrarEmpresa(event)'>Seguir</button>";
        
        var nomeLoja = $('#nomeLoja');
        if (nomeLoja.val()) {
            $('#msgInputNome').text('');
            $.ajax({
                url: 'http://localhost/PO/public/posts/persistirLoja',
                method: 'POST',
                data: $('form').serialize(),
                dataType: 'text',
                beforeSend: function (xhr) {
                    $('#myAreaProcess').html("<div id='processamento'><div id='areaItemProcess'><div id='itemProcess'></div></div></div>");
                },
                success: function (data, textStatus, jqXHR) {
                    $('#msgResultCadastroLoja').html(data);
                    var msgResult = document.querySelector("#msgResult");
                    if (msgResult.textContent === 'sucesso') {
                        var lastInsertIdLoja = $('#lastInsertIdLoja').text();
                        var inputLastInsertIdLoja = `<input type='text' id='lastInsertIdLoja' name='lastInsertIdLoja' class='d-none' value='${lastInsertIdLoja}'>`;
                        passoSeguinte += inputLastInsertIdLoja;
                        $('#passoCadastro').html(passoSeguinte);
                    }
                },
                complete: function (jqXHR, textStatus) {
                    $('#myAreaProcess').html("");
                }
            });
        } else {
            nomeLoja.focus();
            $('#msgInputNome').text('Insira o nome da Loja');
            $('#msgResultCadastroLoja').text('');
        }
    
    });
    
});

