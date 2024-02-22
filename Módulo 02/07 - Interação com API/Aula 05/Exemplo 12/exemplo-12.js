

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
            </<h3>

            <p>
                ${procura[produto].descricao}
            </p>

            <div class="valores">

                <span class="ComDesconto">
                    ${procura[produto].valorComDesconto}
                    
                </span>

                <span class="SemDesconto">
                    ${procura[produto].valorSemDesconto}
                </span>
            </div>




        </div>`
        
    }  


}

pesquisa()
