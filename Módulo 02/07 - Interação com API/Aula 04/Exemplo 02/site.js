let urlProdutos = ""

async function procurar(){
    let resposta = await fetch(urlProdutos)
    let coisas = await resposta.json()
    for(produto in coisas){
       
        document.body.innerHTML += `
            //codigo
        `
    }
}