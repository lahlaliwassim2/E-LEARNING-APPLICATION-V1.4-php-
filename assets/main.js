var ModBtn =document.querySelector(".inp");
var ModBg = document.querySelector(".invisible");
var ModFerm = document.querySelector(".ferm");
let Name = document.getElementById("name");
let Temps = document.getElementById("temps");
let Submit = document.getElementById("submit");
let ErorName =document.getElementById("erorN");
let ErorTemps=document.getElementById("erorE");

ModBtn.addEventListener('click' ,function(){
    // console.log("oui c est bien")
    ModBg.classList.remove('invisible')    ;
})
ModFerm.addEventListener('click', function(){
    ModBg.classList.add('invisible');
})

// validate input name : 

Submit.addEventListener("click", (e) =>{
    if(Name.value =="") {
        console.log("oui c est")

      e.preventDefault();
      Name.setAttribute("style","color:red ; border:1px red solid ;");
      ErorName.innerText = "Name is required !!!";
      ErorName.setAttribute("style","color:red ;");
                        }
    else{
        // e.preventDefault();
        Name.setAttribute("style","color:green ;");
        ErorName.innerText="";
    }
})

Submit.addEventListener("click", (e) =>{
    if(Temps.value ==""){
        e.preventDefault();
        Temps.setAttribute("style","color:red ; border : 1px red solid ;");
        ErrorEvent.setAttribute("style","color : red ;");

    }
    else{
        // e.preventDefault();
        Name.setAttribute("style","color:green")
        ErorTemps.innerText="";
    }
})
// functions : 

