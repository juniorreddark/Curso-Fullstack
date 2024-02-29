async function verDetalhes(){
    let buscar = await fetch("lista-produtos.json")
    let produtos = await buscar.json()
    let parametrosURL = new URLSearchParams(window.location.search)
    let idProduto = parametrosURL.get("id")
    let inProduto = null

    for(let x in produtos){
        if(produtos[x].id == idProduto){
            inProduto = x

        }

    }

    document.body.innerHTML=`
    <h3>${produtos[inProduto].nome}</h3>`


}

verDetalhes()