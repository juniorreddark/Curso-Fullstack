async function buscar(){
    let procura = await fetch("lista-produtos.json")
    let produtos = await procura.json()
    let buscaParametros = new URLSearchParams(window.location.search)

}

buscar()