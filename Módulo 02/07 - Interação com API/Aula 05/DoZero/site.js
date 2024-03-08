async function buscar(){
    let procura = await fetch("site.json")
    let produtos = await procura.json()
    let lista = document.getElementById("lista-card")
    for(marca of produtos){
        lista.innerHTML+=`
        <div class="card">
            <div class="card-card">
                <img src="${marca.img}" width="250" height="auto">
            </div>
            <p>${marca.nome}</p>
        </div>
        `
        



    }

    let elementocards = document.querySelectorAll(".card")
    for(let card of  elementocards){
        card.addEventListener("click",clicou)

    }
}

buscar()

function clicou(){
    let produtoId = this.getAttribu

}