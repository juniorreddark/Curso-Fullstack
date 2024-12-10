async function verDetalhes(){
    let buscar = await fetch("lista-produtos.json")
    let produtos = await buscar.json()
    let parametrosURL = new URLSearchParams(window.location.search)
    let idProduto = parametrosURL.get("id")
    let inProduto = null
    
    for(let x in produtos){
        if(produtos[x].id == idProduto ){
            inProduto = x


        }


    }

    document.title = produtos[inProduto].nome

    document.getElementById("detalhes").innerHTML+=`
    <div class="grupos">
        <div class="list-card">
            <div class="cardImg">
            
                <h1>
                ${produtos[inProduto].nome}
                
                </h1>
                <div class="imagens">
                    <img src="${produtos[inProduto].img[0]}" id="img-frame"  width="300" height="auto" style="border:1px solid #000;border-radius:10px">
                </div>
                <div class="mini-img" id="mini-img">

                </div>    

                <p>
                    ${produtos[inProduto].descricaoCompleta}
                </p>
                <div class="grupoValores">
                    <span class="valorComDesconto">
                        R$${(produtos[inProduto].valorComDesconto).toFixed(2).replace(".",",")}
                    </span>
                    <span class="valorSemDesconto">
                        R$${(produtos[inProduto].valorSemDesconto).toFixed(2).replace(".",",")}
                    </span>
                </div>
            </div>
        </div>
    </div>

    `

    let divmini = document.getElementById("mini-img")
    for(let i of produtos[inProduto].img){
        divmini.innerHTML+=`<img src="${i}" class="miniatura"width="80" height="80" style="border:1px solid #000;border-radius:5px;">`
    }

    let minicards=document.querySelectorAll(".miniatura")
    for(let card of minicards){
        card.addEventListener("mouseover",alteraImg)
    }
   
    


}

function alteraImg(){
    let frame = document.getElementById("img-frame")
    frame.src = this.getAttribute("src")

}

verDetalhes()

