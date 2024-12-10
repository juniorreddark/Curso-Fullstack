/*async function darkRed(arquivo, id){
    let file = await fetch(arquivo)
    let convertido = await file.text()
    document.getElementById(id).textContent = convertido

   
    
}

darkRed("exemplo-03.txt")
darkRed("exemplo-04.txt")*/

async function buscar(arquivo, id){
    let buscado = await fetch(arquivo)
    let convertido = await buscado.text()
    document.getElementById(id).textContent = convertido
}

buscar("pescaria.txt","teste")
buscar("pokemon.txt","pokemon")