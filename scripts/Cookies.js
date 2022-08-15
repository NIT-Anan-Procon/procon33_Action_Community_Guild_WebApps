function setCookie(){
    document.cookie = "Azekawa";
}

function getCookie(){
    if(document.cookie != ""){
        document.getElementById("user").textContent = document.cookie+'‚³‚ñ‚±‚ñ‚É‚¿‚Í';
    }
    
}