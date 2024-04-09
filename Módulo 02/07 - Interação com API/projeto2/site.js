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