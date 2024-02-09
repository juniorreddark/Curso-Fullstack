let urlProdutos = "https://raw.githubusercontent.com/juniorreddark/Curso-Fullstack/master/M%C3%B3dulo%2002/07%20-%20Intera%C3%A7%C3%A3o%20com%20API/Aula%2004/Exemplo%2002/site.json"

async function procurar(){
    let resposta = await fetch(urlProdutos)
    let coisas = await resposta.json()
    document.body.innerHTML+=`
    <nav>
        <ul>
            <h3>  
                <li>
                    Produtos
                </li>
            </h3>
        </ul>
    </nav>
    <div class="lista">`
    for(produto in coisas){
       
        document.body.innerHTML += 
        `
   
        <div class="card">
            <img src=
            "${coisas[produto].img}"
            alt="" width="auto" height="150">
            <p class="titulo">
                ${coisas[produto].nome}
            </p>
        

            <p>
                ${coisas[produto].descricao}
            </p>
            <div class="valores">
                <span class="valorSem">
                    ${coisas[produto].valorSemDesconto}
                </span>
                <span class="valorCom">
                    ${coisas[produto].valorComDesconto}
                </span>
            </div>
            <p>${coisas[produto].tipoEntrega}</p>
           

        </div>
       
            
        `
    }
}
document.body.innerHTML+=`
</div>
<footer>
    <p>
        &copy;Direitos reservados
    </p>
</footer>
`


procurar()