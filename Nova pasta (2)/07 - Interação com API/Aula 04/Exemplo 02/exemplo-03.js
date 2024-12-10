let urlProdutos = "https://raw.githubusercontent.com/juniorreddark/Curso-Fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Consumir%20API/produtos.json"
async function buscar(){
    let resposta = await fetch(urlProdutos)
    let produtos = await resposta.json()
    for (let produto in produtos){
       // alert(produtos[produto].img)
    
      document.body.innerHTML +=`
      <div class="card">
      <img 
        src="${produtos[produto].img}"
        width="auto"
        height="150"
      >
      <p class="titulo">
        ${produtos[produto].nome}
      </p>
      <p>
        ${produtos[produto].descricao}
      </p>
      <div class=""valores>
      <span class="valorCom">
        ${produtos[produto].valorSemDesconto}
      </span>
        

      <span class="valorSem">
      ${produtos[produto].valorComDesconto}
      </span>

      <p>
      
        ${produtos[produto].tipoEntrega}
      </p>

      </div>  
      </div>` 
    }

}

buscar()