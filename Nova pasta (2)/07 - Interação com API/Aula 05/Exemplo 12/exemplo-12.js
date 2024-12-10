

async function pesquisa(){

    let UrlProdutos = "exemplo-12.json"
    let resposta = await fetch(UrlProdutos)
    let procura = await resposta.json()
    
    for(let produto in procura){
        document.getElementById("lista-card").innerHTML+=`
        <div class="card">
            <div class="img">
                <img src="${procura[produto].img}" width="350" height="auto">
            </div>
            <h3 class="texto">
                ${procura[produto].nome}
            </h3>

            <p class="titulo">
                ${procura[produto].descricao}
            </p>

            <div class="valores">

                <span class="ComDesconto">
                    R$ ${(procura[produto].valorComDesconto).toFixed(2).replace(".",",")}
                    
                </span>

                <span class="SemDesconto">
                    R$ ${procura[produto].valorSemDesconto.toFixed(2).replace(".",",")}
                </span>
            </div>




        </div>`
        
    }  


}

pesquisa()
