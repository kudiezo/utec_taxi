// Obtém as referências dos elementos
var tipoClienteSelect = document.getElementById('tipoCliente');
var tipoMotoristaSelect = document.getElementById('tipoMotorista');
var nomeEmpresaInput = document.getElementById('nomeEmpresa');

// Adiciona evento de alteração ao campo "tipoCliente"
tipoClienteSelect.addEventListener('change', function() {
  // Obtém o valor selecionado do campo "tipoCliente"
  var selectedValue = tipoClienteSelect.value;

  // Habilita ou desabilita o campo "tipoMotorista" com base no valor selecionado
  if (selectedValue === 'Motorista') {
    tipoMotoristaSelect.disabled = false;
  } else {
    tipoMotoristaSelect.disabled = true;
    tipoMotoristaSelect.selectedIndex = 0; // Reinicia a seleção do campo "tipoMotorista"
  }

  // Habilita ou desabilita o campo "nomeEmpresa" com base nos valores selecionados
  if (selectedValue === 'Motorista' && tipoMotoristaSelect.value === 'Empresa') {
    nomeEmpresaInput.disabled = false;
  } else {
    nomeEmpresaInput.disabled = true;
    nomeEmpresaInput.value = ''; // Limpa o valor do campo "nomeEmpresa"
  }
});

// Adiciona evento de alteração ao campo "tipoMotorista"
tipoMotoristaSelect.addEventListener('change', function() {
  // Obtém o valor selecionado do campo "tipoMotorista"
  var selectedValue = tipoMotoristaSelect.value;

  // Habilita ou desabilita o campo "nomeEmpresa" com base nos valores selecionados
  if (tipoClienteSelect.value === 'Motorista' && selectedValue === 'Empresa') {
    nomeEmpresaInput.disabled = false;
  } else {
    nomeEmpresaInput.disabled = true;
    nomeEmpresaInput.value = ''; // Limpa o valor do campo "nomeEmpresa"
  }
});
