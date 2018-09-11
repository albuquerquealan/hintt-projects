
function callTop(){
    chamarPopUp();
    mudarAssuntoTop();
}
function callPremium(){
    chamarPopUp();
    mudarAssuntoPremium();
}
function callAdvanced(){
    chamarPopUp();
    mudarAssuntoAdvanced();
}
function callBasic(){
    chamarPopUp();
    mudarAssuntoBasic();
}

function chamarPopUp(){
    document.getElementById('modal-wrapper').style.display='block';
   
}

function mudarAssuntoTop(){
   var assunto =  document.getElementById("assunto")
   assunto.value = "Cotação do plano TOP "
}

function mudarAssuntoPremium(){
   var assunto =  document.getElementById("assunto")
   assunto.value = "Cotação do plano Premium "
}

function mudarAssuntoAdvanced(){
   var assunto =  document.getElementById("assunto")
   assunto.value = "Cotação do plano Advanced "
}

function mudarAssuntoBasic(){
   var assunto =  document.getElementById("assunto")
   assunto.value = "Cotação do plano Básico "
}