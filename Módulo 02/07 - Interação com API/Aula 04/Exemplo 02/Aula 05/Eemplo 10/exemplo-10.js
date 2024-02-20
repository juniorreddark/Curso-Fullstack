async function buscar(){
    let UrlProdutos=""
    let procura = await fetch("lista-produtos.json")
    //console.log(procura)
    let produtos = await procura.json()
    let listaDiv= document.getElementById("lista-card")
    for (let produto of produtos){
        listaDiv.innerHTML +=`

            <div class="card">
                <img src="${produto.img}"  width="250" height="auto">                
                <h3 class="titulo">
                ${produto.nome}
                </h3>
                <p>
                ${produto.descricao}
                </p>
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

}

buscar()