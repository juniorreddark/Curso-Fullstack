async function pesquisar(){
    let procura = await fetch("lista-moda.json")
    let resposta = await procura.json()
    let listDiv = document.getElementById("list-cards")

    for (let photos of resposta){
        listDiv.innerHTML+=`
        <div class="geral">
            <div class="grupo-cards">
                <img src="${photos.img}" width="250" height="auto">
            </div>

            <div class="textos">
                <h3>
                    ${photos.nome}
                </h3>
                <p>
                    ${photos.descricao}
                </p>
            </div>
            <div class="valores">
                <span class="valorComDesconto">
                    ${photos.valorComDesconto}
                </span>

                <span class="valorComDesconto">
                    ${photos.valorSemDesconto}
                </span>
            </div>
        </div>`

    }
}

pesquisar()