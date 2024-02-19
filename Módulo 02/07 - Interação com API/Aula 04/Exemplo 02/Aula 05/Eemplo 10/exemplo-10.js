async function buscar(){
    let UrlProdutos=""
    let procura = await fetch("lista-produtos.json")
    //console.log(procura)
    let produtos = await procura.json()
    let listaDiv= document.getElementById("lista-card")
    for (let x in produtos){
        listaDiv.innerHTML +=`<h1>${produtos[x].nome}</h1`

    }

}

buscar()