function menuShoe(){
    let menuMobile = document.querySelector(".mobile-menu");
    if(menuMobile.classList.contains("open")){
        menuMobile.classList.remove("open")
        document.querySelector(".icon").src ="https://images-americanas.b2w.io/produtos/01/00/img3/28939647/9/2893964711_1SZ.jpg"; width="250"; height="auto" 
    } else {
        menuMobile.classList.add("open")
        document.querySelector(".icon").src ="https://images-americanas.b2w.io/produtos/01/00/img3/28939647/9/2893964711_3SZ.jpg";  width="250"; height="auto" 

    }
}