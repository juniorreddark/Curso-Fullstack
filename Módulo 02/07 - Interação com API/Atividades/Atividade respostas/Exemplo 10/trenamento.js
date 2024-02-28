async function buscar(){
    let UrlProdutos="trenamento.json"
    let procura=await fetch(UrlProdutos)
    let convertir = await procura.json()
    for(produto in convertir){
        //alert(convertir[produto].nome)
        document.getElementById("lista-card").innerHTML+=`
            <div>

                <h1>
                    ${convertir[produto].nome}
                </h1>

            </div>
            
        `
    }
}

buscar()