async function pesquisar(){
    let procura = await fetch("list-cards.json")
    let resposta = await procura.json()
    let listDiv = document.getElementById("list-cards")

    for(let photos of resposta){
        listDiv.innerHTML+=`
        <div class="geral">

            <div class="cards" data-id="${photos.id}" >
                <div class="grupo-cards">
                    <img src="${photos.img[0]}" width="250" height="250">
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

                    <span class="valorSemDesconto">
                        ${photos.valorSemDesconto}
                    </span>
                    
                </div>
            </div>
            
        </div>
            `
    }

  

    let elementoscard = document.querySelectorAll(".cards")

    for(card of elementoscard ){
        card.addEventListener("click",cliquei)
    }

}

pesquisar()


function cliquei(){
   let elementoID = this.getAttribute("data-id")
   window.location.href="site1.html?id=" +elementoID
}


const chk = document.getElementById("chk")
chk.addEventListener("change", ()=>{
    document.body.classList.toggle("dark")
})


let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(){
    if (slideIndex == 4){
        slideIndex = 0
        
    
    }

    for (let slide of slides){
        slide.style.display = 'none';
    }

    slides[slideIndex].style.display = 'block';

}

function nextSlid(){
    slideIndex++
    showSlide();
}

function prevSlid(){
    slideIndex--
    showSlide();
}

showSlide(0)

setInterval(() => {
    slideIndex++
    showSlide()
},5000)


/*function showSlide() {
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
    }

    for (let slide of slides) {
        slide.style.display = 'none';
    }

    slides[slideIndex].style.display = 'block';
}

function nextSlide() {
    slideIndex++;
    showSlide();
}

function prevSlide() {
    slideIndex--;
    showSlide();
}

showSlide();

setInterval(() => {
    slideIndex++;
    showSlide();
}, 5000);*/

/*function listaItem(){
    let lista = document.getElementById("lista-item1")
    lista.addEventListener("mouseover",apertar)
    lista.addEventListener("mouseout",sair)
    
}

listaItem()

function apertar(){
    let lista = document.getElementById("lista-item1")
    for(li in lista){
        lista.innerHTML+=`<div><a href="http://127.0.0.1:5500/site1.html?id=6">$</a></div>
        <div<a href="http://127.0.0.1:5500/site1.html?id=3">1</a></div>
        `
    }
    
}

function sair(){
    let lista = document.getElementById("lista-item1").innerHTML=`<div>celular</div>`

}*/

let boxBuscar = document.querySelector('.buscar-boxk')
let lupa = document.querySelector('.lupa-buscark')
let btnFechar = document.querySelector('.btn-fechark')

lupa.addEventListener("click",()=>{
    boxBuscar.classList.add('ativar')
})

btnFechar.addEventListener("click",()=>{
    boxBuscar.classList.remove('ativar')
})



let boxBuscark = document.querySelector('.buscar-boxk')
let lupak = document.querySelector('.lupa-buscark')
let btnFechark = document.querySelector('.btn-fechark')

lupa.addEventListener("click",()=>{
    boxBuscark.classList.add('ativar')
})

btnFechar.addEventListener("click",()=>{
    boxBuscark.classList.remove('ativar')
})