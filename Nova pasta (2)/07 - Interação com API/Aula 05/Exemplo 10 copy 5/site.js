async function pesquisar(){
    let procura = await fetch("list-cards.json")
    let resposta = await procura.json()
    let listDiv = document.getElementById("list-cards")

    for(let photos of resposta){
        listDiv.innerHTML+=`
        <div class="cards">

        <div class="grupo-cards">
            <img src="${photos.img}" width="250" height="250">
        </div>

        <div class="textos">
            <h3>
                ${photos.nome}
            </h3>
            <p>
                ${photos.descricao}
            </P>
        </div>
        <div class="valores">
            <span class="valorComDesconto">
                ${photos.valorComDesconto}
            </span>

            <span class="valorSemDesconto">
            ${photos.valorSemDesconto}
            </span>
        <div>



        </<div>`

    }
l
    let elementoscards = document.querySelectorAll(".cards")
    for(let card of elementoscards){
        card.addEventListener("click",cliquei)

    }
}

pesquisar()

function cliquei(){
    
}