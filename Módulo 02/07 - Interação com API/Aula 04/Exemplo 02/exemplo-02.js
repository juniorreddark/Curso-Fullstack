let urlProdutos = "https://raw.githubusercontent.com/juniorreddark/Curso-Fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Consumir%20API/produtos.json"
async function procura(){
    let resposta = await fetch(urlProdutos)
    let produtos = await resposta.json()
    for (let produto in produtos){
    
    
        document.body.innerHTML += `
        <div class="card">
            <img    
                src="${produtos[produto].img}"    
                alt="Não renderizou"
                width="auto"
                height="150"
            >
            <p class="titulo">
                ${produtos[produto].nome}
            </p>
            <p>
                ${produtos[produto].descricao}
            </p>
            <div class="valores">
                <span class="valorCom">
                    R$ ${produtos[produto].valorSemDesconto}
                </span>
                <span class="valorSem">
                    R$ ${produtos[produto].valorComDesconto}tipoEntrega
                </span>

            </div>
            <p>
                ${produtos[produto].tipoEntrega}
            </p>
        </div>
        `
    }


    

    

}

procura()
