async function pesquisar(){
    let procura = await fetch("contantos.json")
    let buscar = await procura.json()
    let listaDiv = document.getElementById("lista-div")

    for(let produto of buscar){
        listaDiv.innerHTML+=`
        <div class="card">
            <h1>
                ${produto.nome}
            </h1>
            <div class="img">
                <img src="${produto.img} width="100" height="auto">
            </div>            
            <span>
                ${produto.name}
            </span>
            <p>${produto.rede}</p>
           

        </div>
        `

    }
}

pesquisar()


