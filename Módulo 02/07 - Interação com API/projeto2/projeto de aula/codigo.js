/*<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição Única de Imagem</title>
</head>
<body>
    <div id="imagemContainer"></div>

    <script src="script.js"></script>
</body>
</html>
JavaScript (script.js):

javascript
Copy code
// Função para exibir a imagem após um certo tempo
function exibirImagem() {
    var imagemContainer = document.getElementById("imagemContainer");
    var imagem = document.createElement("img");
    
    // Defina o caminho da imagem que deseja exibir
    imagem.src = "caminho/para/sua/imagem.jpg";
    
    // Adicione a imagem ao contêiner
    imagemContainer.appendChild(imagem);
}

// Defina o tempo de atraso em milissegundos (por exemplo, 5000 para 5 segundos)
var tempoAtraso = 5000;

// Chame a função para exibir a imagem após o tempo de atraso especificado
setTimeout(exibirImagem, tempoAtraso);
Neste exemplo, a função exibirImagem() cria um elemento <img> e define seu atributo src



com css
ChatGPT
Entendi, você gostaria de exibir uma imagem uma única vez em uma página da web após um certo intervalo de tempo usando apenas CSS e JavaScript. Nesse caso, você pode usar CSS para ocultar a imagem inicialmente e JavaScript para mostrar a imagem após o intervalo de tempo especificado. Aqui está como você pode fazer isso:

HTML:

html
Copy code
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição Única de Imagem</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="imagemContainer">
        <img src="caminho/para/sua/imagem.jpg" id="imagem" alt="Imagem">
    </div>

    <script src="script.js"></script>
</body>
</html>
CSS (styles.css):

css
Copy code
/* Esconda a imagem inicialmente 
#imagem {
    display: none;
}
JavaScript (script.js):

javascript
Copy code
// Função para exibir a imagem após um certo tempo
function exibirImagem() {
    var imagem = document.getElementById("imagem");
    imagem.style.display = "block"; // Mostra a imagem
}

// Defina o tempo de atraso em milissegundos (por exemplo, 5000 para 5 segundos)
var tempoAtraso = 5000;

// Chame a função para exibir a imagem após o tempo de atraso especificado
setTimeout(exibirImagem, tempoAtraso);
Neste exemplo, a imagem é inicialmente ocultada usando CSS (display: none;). Em seguida, o JavaScript é usado para mostrar a imagem após um determinado tempo de atraso usando setTimeout(). Isso garantirá que a imagem seja exibida apenas uma vez após o intervalo de tempo especificado.

/*function exibirMensagem() {
    alert("Esta é uma mensagem exibida a cada segundo.");
  }
  
  // Definindo o intervalo para chamar a função a cada segundo (1000 milissegundos)
setInterval(exibirMensagem, 2000);

exibirMensagem()*/


/*Claro, aqui está um exemplo de como você pode criar uma função em JavaScript para obter a hora atual:

javascript
Copy code
function getTime() {
    // Crie um novo objeto de data
    var now = new Date();

    // Obtenha horas, minutos e segundos
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    // Formate a hora para ter sempre dois dígitos
    hours = (hours < 10) ? "0" + hours : hours;
    minutes = (minutes < 10) ? "0" + minutes : minutes;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    // Retorne a hora formatada
    return hours + ":" + minutes + ":" + seconds;
}

// Exemplo de uso
console.log("A hora atual é: " + getTime());*/

/*function myFunction() {
    alert("A página foi carregada!");
   let div = document.getElementById("time-1")
   div.innerHTML+=`<img src="https://a-static.mlcdn.com.br/800x560/smartphone-xiaomi-redmi-note-13-pro-4g-256gb-8gb-forest-green-verde/faniquita/b1402f7ad63911eea0984201ac185040/cc90f40374614fdc797e5ee3357d4dd8.jpeg" alt="">`
    // Coloque aqui o código que deseja executar uma vez que a página foi carregada
}

myFunction() 

// Adiciona um ouvinte de evento para detectar quando o DOM (Document Object Model) estiver pronto
document.addEventListener("DOMContentLoaded", myFunction);*/







