// Obtém as referências dos elementos
var tipoClienteSelect = document.getElementById('tipoCliente');
var tipoMotoristaSelect = document.getElementById('tipoMotorista');
var tipoVeiculoSelect = document.getElementById('tipoVeiculo');
var areaOpcional = document.getElementsByClassName('areaOpcional');
var form_signup = document.getElementById('formulario-signup');

// Adiciona evento de alteração ao campo "tipoCliente"
tipoClienteSelect.addEventListener('change', function() {
  // Obtém o valor selecionado do campo "tipoCliente"
  var selectedValue = tipoClienteSelect.value;

  // Habilita ou desabilita o campo "tipoMotorista" com base no valor selecionado
  if (selectedValue === 'Motorista') {
    tipoMotoristaSelect.disabled = false;
    tipoVeiculoSelect.disabled = false;
    areaOpcional[0].style.display = 'block';
    areaOpcional[1].style.display = 'block';
    form_signup.setAttribute('action', 'http://localhost/utec_taxi/motoristas/cadastro');
  } else {
    form_signup.setAttribute('action', 'http://localhost/utec_taxi/clientes/cadastro');
    tipoMotoristaSelect.disabled = true;
    tipoVeiculoSelect.disabled = true;
    areaOpcional[0].style.display = 'none';
    areaOpcional[1].style.display = 'none';
    tipoMotoristaSelect.selectedIndex = 0; // Reinicia a seleção do campo "tipoMotorista"
    tipoVeiculoSelect.selectedIndex = 0; // Reinicia a seleção do campo "tipoVeiculo"
  }
});

