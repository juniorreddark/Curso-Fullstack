async function pesquisa(){
    let urlProdutos="teste.json"
    let resposta = await fetch(urlProdutos)
    let converte = await resposta.json()
    for(produto in converte){
        document.getElementById("lista-card").innerHTML+=`
        <div class="card">
        <div class="img">
            <img src="${converte[produto].img}" widht="50" heigth="auto">
        </div>
            <h1>
                ${converte[produto].nome}
            </h1>

            <p class="texto">
                ${converte[produto].descricao}
            </p>

            <div class="valores">

            <span class="valorComDesconto">
                ${converte[produto].valorComDesconto}
            </span>
            
            <span class="valorSemDesconto">
                ${converte[produto].valorSemDesconto}
            </span>

            </div>
            
        </div>
        
        `
        //alert(converte[produto].nome)
    }
}

pesquisa()