let urlProdutos = "https://raw.githubusercontent.com/juniorreddark/Curso-Fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Consumir%20API/produtos.json"
async function buscar(){
    let resposta = await fetch(urlProdutos)
   let produtos = await resposta.json()
   /*alert(produtos)
   console.log(produtos)
   alert(produtos[1].descricao)*/
   /*document.body.innerHTML += produtos[1].descricao+"<br>"
   document.body.innerHTML += produtos[2].descricao+"<br>"*/
    /*for(let c in produtos){
        document.body.innerHTML += produtos[c].descricao+"<br>"
    }*/

    for(let produto in produtos){
        document.body.innerHTML += produtos[produto].descricao+"<br>"
        document.body.innerHTML += ` <div> o nome do produto é ${produtos[produto].nome} <br> </div>`
    }

    
    /*for(let x in lista){
    if(lista[x] == "gato")
        alert("verdadeiro")
    }*/
}


buscar()
let imagem = src='download.jpg'
document.body.innerHTML += `<div>
<img src='download.jpg'>
<p>Smartphone Xvz</p>
<span>Ultima Gerção</span>
<p>999,99</p>
</div>`
document.querySelector("div").style.border='2px solid'
document.querySelector("div").style.width="fit-content"

