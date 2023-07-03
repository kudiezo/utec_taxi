const mapa = document.querySelector(".mapa");
const tipo_escolha = document.getElementById("tipo-escolha");
const positions = document.querySelectorAll(".td");

// Gera índices aleatórios para coordenas

const coords = (linhas, colunas) => {
  var x = Math.floor(Math.random() * linhas);
  var y = Math.floor(Math.random() * colunas);

  return [x, y];
};

var a = 0;
while (a < 5) {
  const coordsXY = coords(15, 15);

  const pos = document.querySelector(`.l${coordsXY[0]} .c${coordsXY[1]}`);

  // Atribui o valor veicula à posição da matriz
  pos.innerHTML = `<i class="fa-solid fa-car-side"></i>`;

  //pos.querySelector(".fa-car-side").style.display = "none";
  a++;
}

//Set passageiro no mapa
positions.forEach((position, index) => {
  position.addEventListener("click", () => {
    position.innerHTML = `<i class="fa-solid fa-person"></i>`;
    positions.forEach((positionAux, indexAux) => {
      if (
        indexAux !== index &&
        positionAux.querySelector("i") &&
        positionAux.querySelector("i").className !== "fa-solid fa-car-side"
      ) {
        positionAux.innerHTML = "";
      }
    });
    TableMat();
  });
});

tipo_escolha.addEventListener("change", () => {
  switch (tipo_escolha.value) {
    case "1":
      var pCoordsGet = "";

      positions.forEach((position) => {
        if (
          position.querySelector("i") &&
          position.querySelector("i").className === "fa-solid fa-person"
        ) {
          pCoordsGet = position.id;
        }
      });

      var pCoords = [
        Number(pCoordsGet.split(" ")[0].charAt(1)),
        Number(pCoordsGet.split(" ")[1].charAt(1)),
      ];

      console.log(pCoords);

      var matriz = TableMat();

      // Chama a função para encontrar o veículo mais próximo
      var veiculoMaisProximo = encontrarVeiculoMaisProximo(matriz);
      console.log(veiculoMaisProximo);
      document
        .querySelector(
          `.l${veiculoMaisProximo.linha} .c${veiculoMaisProximo.coluna}`
        )
        .querySelector(".fa-car-side").style.color = "red";

      break;
    case "2":
      break;
    default:
  }
});

// Obtém a referência da tabela pelo ID

// Obtém as linhas da tabela
const TableMat = () => {
  var linhas = mapa.getElementsByTagName("tr");

  // Cria uma matriz vazia
  var matriz = [];

  // Itera sobre as linhas da tabela
  for (var i = 0; i < linhas.length; i++) {
    var linha = linhas[i];
    var celulas = linha.getElementsByTagName("td");

    // Cria um array para armazenar os dados da linha
    var linhaMatriz = [];

    // Itera sobre as células da linha
    for (var j = 0; j < celulas.length; j++) {
      var celula = celulas[j];
      var valor = 0;
      if (celula.querySelector("i")) {
        if (celula.querySelector("i").className === "fa-solid fa-person") {
          valor = 1;
        } else if (
          celula.querySelector("i").className === "fa-solid fa-car-side"
        ) {
          valor = 2;
        }
      }

      // Adiciona o valor à linha da matriz
      linhaMatriz.push(valor);
    }

    // Adiciona a linha à matriz
    matriz.push(linhaMatriz);
  }

  console.log(matriz);
  return matriz;
};
// Encontra a posição "1" na matriz
function encontrarPosicaoUm(matriz) {
  for (var i = 0; i < matriz.length; i++) {
    for (var j = 0; j < matriz[i].length; j++) {
      if (matriz[i][j] === 1) {
        return { linha: i, coluna: j };
      }
    }
  }
  return null; // Caso não encontre a posição "1"
}

// Calcula a distância entre duas posições na matriz
function calcularDistancia(posicao1, posicao2) {
  var linha1 = posicao1.linha;
  var coluna1 = posicao1.coluna;
  var linha2 = posicao2.linha;
  var coluna2 = posicao2.coluna;

  var distancia = Math.abs(linha2 - linha1) + Math.abs(coluna2 - coluna1);
  return distancia;
}

// Encontra o veículo mais próximo da posição "1"
function encontrarVeiculoMaisProximo(matriz) {
  var posicaoUm = encontrarPosicaoUm(matriz);
  if (!posicaoUm) {
    return null; // Caso não encontre a posição "1"
  }

  var posicaoMaisProxima;
  var distanciaMinima = Infinity;

  for (var i = 0; i < matriz.length; i++) {
    for (var j = 0; j < matriz[i].length; j++) {
      if (matriz[i][j] >= 2 && matriz[i][j] <= 4) {
        var posicaoAtual = { linha: i, coluna: j };
        var distancia = calcularDistancia(posicaoUm, posicaoAtual);

        if (distancia < distanciaMinima) {
          distanciaMinima = distancia;
          posicaoMaisProxima = posicaoAtual;
        }
      }
    }
  }

  return posicaoMaisProxima;
}
