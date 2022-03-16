var ModBtn =document.querySelector(".inp");
var ModBg = document.querySelector(".invisible");


ModBtn.addEventListener('click' ,function(){
    console.log("oui c est bien")
    ModBg.classList.remove('invisible')    ;
},false)