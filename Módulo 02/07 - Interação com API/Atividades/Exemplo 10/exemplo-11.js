async function buscar(){
    let UrlProdutos=""
    let procura = await fetch("lista-produtos.json")
    //console.log(procura)
    let produtos = await procura.json()
    let listaDiv= document.getElementById("lista-card")
    for (let produto of produtos){
        listaDiv.innerHTML +=`

            <div class="card" data-id="${produto.id}">
                <div class="grupo-img">
                    <img src="${produto.img}"  width="250" height="auto">
                </div>                
                <div class="textos">
                
                    ${produto.nome}
                    </h3>
                    <p>
                    ${produto.descricao}
                    </p>
                </div>
                <div class="valores">
                    <span class="valorSemDesconto">
       
                        R$${(produto.valorComDesconto).toFixed(2).replace(".",",")}
                    </span>

                    <span class="valorComDesconto">
                        R$${(produto.valorSemDesconto).toFixed(2).replace(".",",")}
                    </span>
                </div>

               

            </div>
        `
            

    }

    let elementosCards = document.querySelectorAll(".card")
    for (let card of elementosCards){
        card.addEventListener("click",clicou)
    }

}

buscar()

function clicou(){
    let produtoId = this.getAttribute("data-id")
    window.location.href="detalhes.html?id=" +produtoId
}

//http://127.0.0.1:5500/Aula%2005/Exemplo%2010/detalhes.html?id=2