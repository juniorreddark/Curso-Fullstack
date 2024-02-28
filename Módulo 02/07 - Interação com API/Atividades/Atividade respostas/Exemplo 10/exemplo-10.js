async function buscar(){
    let UrlProdutos=""
    let procura = await fetch("lista-produtos.json")
    //console.log(procura)
    let produtos = await procura.json()
    let listaDiv= document.getElementById("lista-card")
    for (let produto of produtos){
        listaDiv.innerHTML +=`

            <div class="card">
                <div class="grupo-img">
                    <img src="${produto.img}"  width="auto" height="auto">
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

}

buscar()