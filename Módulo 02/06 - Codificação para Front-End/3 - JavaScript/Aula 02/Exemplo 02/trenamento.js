function interruptor(){
    let elemento = document.getElementById("luz")
    for(let x=0;x<=7;){
        if(elemento.src.incluudes("pic_bulboff.gif"))
        elemento.src="pic_bulbon.gif"
    }else{
        elemento.src="pic_bulbon.gif"
    }
}