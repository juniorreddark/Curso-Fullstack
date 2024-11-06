function carregar(){
    var msg = document.getElementById("msg")
    var img = document.getElementById("imagem")
    var data = new Date
    
    
    ()
    var hora = 12
    msg.innerHTML = `Agora são ${hora} horas`

    if(hora >=0 && hora < 12){
        img.src="images/manha.png"
      document.body.style.backgroundColor = "blue"
    } else if(hora >= 12 && hora < 18){
        img.src="images/tarde.png"
        document.body.style.backgroundColor = "orange"
    }else{
        img.src="images/noite.png"
        document.body.style.backgroundColor = "black"
    }
}