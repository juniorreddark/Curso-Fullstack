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

    document.body.innerHTML+=`
    <div class="grupos">
        <div class="list-card">
            <div class="cardImg">
            
                <h1>
                ${produtos[inProduto].nome}
                
                </h1>
                <div class="imagens">
                    <img src="${produtos[inProduto].img}"  width="300" height="auto" style="border:1px solid #000;border-radius:10px">
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
    document.body.innerHTML+=`<footer>&copy;Direitos reservados</footer>`
    


}

verDetalhes()

