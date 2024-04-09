async function verDetalhes(){
    let buscar = await fetch("list-cards.json")
    let produtos = await buscar.json()

    let parametrosUrl = new URLSearchParams(window.location.search)
    let idProdutos = parametrosUrl.get("id")
    
    let inProdutos
    for(let x in produtos){
        if(produtos[x].id == idProdutos){
            inProdutos = x
        }
    }

    document.title = produtos[inProdutos].nome

    document.getElementById("detalhes").innerHTML+=`
    <div class="detalhes">
        <div class="cardImg">
            <h1>
                ${produtos[inProdutos].nome}
            </h1>
            <div class="imagens">
                <img src="${produtos[inProdutos].img[0]}" id="img-frame" width="250" height="auto">
            </div>
            <div class="mini-img" id="mini-img">

            </div>
            <p>
                ${produtos[inProdutos].descricaoCompleta}
            </p>
            <div class="grupoValores">
                <span class="valorComDesconto">
                    ${produtos[inProdutos].valorComDesconto}
                </span>

                <span class="valorSemDesconto">
                    ${produtos[inProdutos].valorSemDesconto}
                </span>
            </div>

        
        </div>

        <div class="produto">
        <h1>
            ${produtos[inProdutos].nome}
        </h1>
        <img src="${produtos[inProdutos].img[0]}" id="img-frame" width="250" height="auto">
        <p class="textos1">${produtos[inProdutos].descricao}</p>
        <div class="valor">
            <span class="valorComDesconto">
                R$${produtos[inProdutos].valorComDesconto}
            </span>

            <span class="valorSemDesconto">
                R$${produtos[inProdutos].valorSemDesconto}
            </span>
        </div>
        <span class="texto2">Quantidade</span>
        <div class="buttons">
            <button class="but" onclick="somarUm()">+</button>
            <span class="contador" id="t1">0</span>
            <button class="but" onclick="subtrair()">-</button>
            
        </div>
        <div class="textos1">
            <p>Formas de Pagamento </p>
            <span>cartões e Pix </p>
            <p>frete grátis </p>
            <button>Comprar</button>
        </div>
    </div>
       
    `
    
    
    let divmini = document.getElementById("mini-img")
    for(i of produtos[inProdutos].img){
        divmini.innerHTML += `
            <img src="${i}" class="miniatura" width="80" height="80" style="border:1px solid #000;border-radius:5px;">
        `
    }

    let minicards = document.querySelectorAll(".miniatura")
    for(card of minicards){
        card.addEventListener("mouseover",alteraImg)
    }

    function alteraImg(){
        let frame = document.getElementById("img-frame")
        frame.src = this.getAttribute("src")
    }
    
}

verDetalhes()

