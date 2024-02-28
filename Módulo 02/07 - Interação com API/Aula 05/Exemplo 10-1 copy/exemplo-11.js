async function buscar(){
    let UrlProdutos=""

    let procura = await fetch("lista-produtos.json")
    let produtos = await procura.json()

    let listaDiv= document.getElementById("lista-card")

    for (let produto of produtos){
        listaDiv.innerHTML +=`
            <div class="card" data-id="${produto.id}">
                <div class="grupo-img">
                    <img src="${produto.img}"  width="250" height="auto">
                </div>                
                <div class="textos">
                    <h3>
                        ${produto.nome}
                    </h3>
                    <p>
                        ${produto.descricao}
                    </p>
                </div>
                <div class="valores">
                    <span class="valorComDesconto">
                        R$${(produto.valorComDesconto).toFixed(2).replace(".",",")}
                    </span>

                    <span class="valorSemDesconto">
                        R$${(produto.valorSemDesconto).toFixed(2).replace(".",",")}
                    </span>
                </div>
            </div>
        `
    }

    let elementosCards = document.querySelectorAll(".card")

    for(let card of elementosCards){
        card.addEventListener("click",cliquecard)
    }

}

buscar()

/*clet lista = ["maça","uva","pera"]
for(let x in lista){
    alert(x)
}*/
function cliquecard(){
    let elementoID = this.getAttribute("data-id")
    window.location.href="detalhes.html?id="+elementoID

    //alert(elementoID)
}
