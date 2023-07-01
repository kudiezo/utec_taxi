function cadastrarEmpresa(event) {
    event.preventDefault();

    var passoSeguinte = "<div class='text-center mb-4'><p class='lead'>Informações do usuário</p> <p class='lead font-weight-normal'>Quem vai fazer a gestão da Loja?</p>";
    passoSeguinte += "</div>";
    
    passoSeguinte += "<span id='msgInputs' class='text-danger'></span>";
    passoSeguinte += "<div class='row'>";
    passoSeguinte += "<div class='form-label-group col-md-6'>";
    passoSeguinte += "<input type='text' id='nome' name='nome' class='form-control' placeholder='Nome' required autofocus autocomplete='on'>";
    passoSeguinte += "<label for='nomeAdmin' class='ml-3'>Primeiro nome <sup class='text-danger'>*</sup></label>";
    passoSeguinte += "</div>";
    passoSeguinte += "<span id='msgInputSobrenome' class='text-danger'></span>";
    passoSeguinte += "<div class='form-label-group col-md-6'>";
    passoSeguinte += "<input type='text' id='sobrenome' name='sobrenome' class='form-control' placeholder='Sobrenome' required autocomplete='on'>";
    passoSeguinte += "<label for='nomeAdmin' class='ml-3'>Sobrenome <sup class='text-danger'>*</sup></label>";
    passoSeguinte += "</div>";
    passoSeguinte += "</div>";
    
    passoSeguinte += "<div class='row ml-1 mb-3'>";
    passoSeguinte += "<div class='custom-control custom-radio'>";
    passoSeguinte += "<input id='masc' name='sexo' type='radio' class='custom-control-input' value='M' checked required>";
    passoSeguinte += "<label class='custom-control-label' for='masc'>Masculino</label>";
    passoSeguinte += "</div>";
    passoSeguinte += "<div class='custom-control custom-radio ml-4'>";
    passoSeguinte += "<input id='fem' name='sexo' type='radio' class='custom-control-input' value='F' required>";
    passoSeguinte += "<label class='custom-control-label' for='fem'>Feminino</label>";
    passoSeguinte += "</div>";
    passoSeguinte += "</div>";
    
    passoSeguinte += "<div class='form-label-group'>";
    passoSeguinte += "<input type='email' id='email' name='email' class='form-control' placeholder='Email' autocomplete='on'>";
    passoSeguinte += "<label for='user'>Email <span class='text-muted'>(Opcional)</span></label>";
    passoSeguinte += "</div>";
    
    passoSeguinte += "<div class='form-label-group'>";
    passoSeguinte += "<input type='tel' id='tel' name='tel' class='form-control' placeholder='Tel' required autocomplete='on'>";
    passoSeguinte += "<label for='user'>Tel <sup class='text-danger'>*</sup></label>";
    passoSeguinte += "</div>";

    passoSeguinte += "<div class='form-label-group'>";
    passoSeguinte += "<input type='text' id='user' name='user' class='form-control' placeholder='Nome de usuário' required autocomplete='on'>";
    passoSeguinte += "<label for='user'>Nome de usuário <sup class='text-danger'>*</sup></label>";        
    passoSeguinte += "</div>";

    passoSeguinte += "<div class='form-label-group'>";
    passoSeguinte += "<input type='password' id='senha' name='senha' class='form-control' placeholder='Senha' required autocomplete='off'>";
    passoSeguinte += "<label for='senha'>Senha <sup class='text-danger'>*</sup></label>";
    passoSeguinte += "</div>";

    passoSeguinte += "<p id='msgResultCadastroLoja' class='text-danger'></p>";
    passoSeguinte += "<button id='btn-cadastrarAdminLoja' class='btn btn-lg btn-success btn-block' onclick='cadastrarAdminLoja(event)'>Concuir</button>";


    var nomeEmpresa = $('#nomeEmpresa');
    if (nomeEmpresa.val()) {
        $('#msgInputNomeEmpresa').text('');
        $.ajax({
            url: 'http://localhost/PO/public/posts/persistirEmpresa',
            method: 'POST',
            data: $('form').serialize(),
            dataType: 'text',
            beforeSend: function (xhr) {
                $('#myAreaProcess').html("<div id='processamento'><div id='areaItemProcess'><div id='itemProcess'></div></div></div>");
            },
            success: function (data, textStatus, jqXHR) {
                $('#msgResultCadastroLoja').html(data);
                var msgResult = document.querySelector("#msgResult");
                var lastInsertIdLoja = $('#lastInsertIdLoja').val();
                var inputLastInsertIdLoja = `<input type='text' name='lastInsertIdLoja' class='d-none' value='${lastInsertIdLoja}'>`;
                if (msgResult.textContent === 'sucesso') {
                    passoSeguinte += inputLastInsertIdLoja;
                    $('#passoCadastro').html(passoSeguinte);
                }
            },
            complete: function (jqXHR, textStatus) {
                $('#myAreaProcess').html("");
            }
        });
    } else {
        nomeEmpresa.focus();
        $('#msgInputNomeEmpresa').text('Insira o nome da Empresa');
        $('#msgResultCadastroLoja').text('');
    }
}

