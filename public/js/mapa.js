const mapa = document.querySelector(".mapa");
const tempoS = document.getElementById("tempo");
const dmc = document.getElementById("dmc");
const dcd = document.getElementById("dcd");
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
  a++;
}

//Set passageiro no mapa
positions.forEach((position, index) => {
  position.addEventListener("click", () => {
    if (
      position.querySelector("i") &&
      (tipo_escolha.value === "1" || tipo_escolha.value === "2") &&
      position.querySelector("i").className === "fa-solid fa-car-side"
    ) {
      position.querySelector(".fa-car-side").style.color = "red";
    } else if (tipo_escolha.value === "0") {
      position.innerHTML = `<i class="fa-solid fa-person"></i>`;
    } else if (tipo_escolha.value === "3") {
      position.style.background = "red";
    }

    positions.forEach((positionAux, indexAux) => {
      if (
        indexAux !== index &&
        tipo_escolha.value === "0" &&
        positionAux.querySelector("i") &&
        positionAux.querySelector("i").className !== "fa-solid fa-car-side"
      ) {
        positionAux.innerHTML = "";
      }

      if (
        indexAux !== index &&
        (tipo_escolha.value === "1" || tipo_escolha.value === "2") &&
        positionAux.querySelector("i") &&
        positionAux.querySelector("i").className === "fa-solid fa-car-side"
      ) {
        positionAux.querySelector(".fa-car-side").style.color = "white";
      }

      if (indexAux !== index && tipo_escolha.value === "3") {
        positionAux.style.background = "#1b2a46";
      }
    });
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

      positions.forEach((position) => {
        if (position.querySelector(".fa-car-side")) {
          position.querySelector(".fa-car-side").style.color = "white";
        }
      });

      document
        .querySelector(
          `.l${veiculoMaisProximo.linha} .c${veiculoMaisProximo.coluna}`
        )
        .querySelector(".fa-car-side").style.color = "red";
      break;
    case "2":
      var pCoordsGet = "";
      positions.forEach((position) => {
        if (position.querySelector(".fa-car-side")) {
          position.querySelector(".fa-car-side").style.display = "block";
          if (position.querySelector(".fa-car-side").style.color === "red") {
            pCoordsGet = position.id;
          }
        }
      });

      break;
    default:
  }
});

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

      if (
        celula.querySelector("i") &&
        celula.querySelector("i").className === "fa-solid fa-car-side" &&
        celula.querySelector("i").style.color === "red"
      ) {
        valor = 7;
      }

      if (celula.style.background === "red") {
        valor = 8;
      }
      // Adiciona o valor à linha da matriz
      linhaMatriz.push(valor);
    }
    // Adiciona a linha à matriz
    matriz.push(linhaMatriz);
  }

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

const getAllCoords = (matriz) => {
  var posicaoUm = encontrarPosicaoUm(matriz);
  if (!posicaoUm) {
    return null; // Caso não encontre a posição "1"
  }

  var coordenadas = [];
  for (var i = 0; i < matriz.length; i++) {
    for (var j = 0; j < matriz[i].length; j++) {
      if (matriz[i][j] === 1) {
        coordenadas.push({
          id: matriz[i][j],
          desc: "passageiro",
          linha: i,
          coluna: j,
        });
      }
      if (matriz[i][j] === 7) {
        coordenadas.push({
          id: matriz[i][j],
          desc: "carro",
          linha: i,
          coluna: j,
        });
      }
      if (matriz[i][j] === 8) {
        coordenadas.push({
          id: matriz[i][j],
          desc: "destino",
          linha: i,
          coluna: j,
        });
      }
    }
  }

  return coordenadas;
};

function calcularDistanciaEuclidiana(posicao1, posicao2) {
  var x1 = posicao1.linha;
  var y1 = posicao1.coluna;
  var x2 = posicao2.linha;
  var y2 = posicao2.coluna;
  var distancia = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
  return distancia;
}

const getTime = (v) => {
  let coordAux = [];
  let distCarro = 0;
  let distDest = 0;

  getAllCoords(TableMat()).map((coord) => {
    if (coord.id === 1 || coord.id === 7) {
      coordAux.push(coord);
    }
  });

  distCarro = calcularDistanciaEuclidiana(coordAux[0], coordAux[1]);
  dmc.innerHTML = distCarro.toFixed(2) + "km";
  console.log(coordAux);
  console.log("Distancia do cliente para o carro: " + distCarro);
  coordAux = [];

  getAllCoords(TableMat()).map((coord) => {
    if (coord.id === 1 || coord.id === 8) {
      coordAux.push(coord);
    }
  });

  console.log(coordAux);
  distDest = calcularDistanciaEuclidiana(coordAux[0], coordAux[1]);
  console.log("Distancia do cliente para o destino: " + distDest);
  dcd.innerHTML = distDest.toFixed(2) + "km";

  var tempo = (distCarro + distDest) / v;
  console.log("Tempo: " + tempo);
  tempoS.innerHTML = tempo.toFixed(2) + "h";
};
