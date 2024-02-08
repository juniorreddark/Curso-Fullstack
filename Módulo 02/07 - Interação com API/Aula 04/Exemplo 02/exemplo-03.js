let urlProdutos = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fblog.cuecastore.com.br%2Fweb-stories%2Fconfira-10-tendencias-de-moda-masculina-para-o-inverno-2023%2F&psig=AOvVaw2MuGEoG3X17TE90s5wAuxg&ust=1707485784381000&source=images&cd=vfe&opi=89978449&ved=2ahUKEwji566u7puEAxUqg5UCHTqPC6MQjRx6BAgAEBQ"
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