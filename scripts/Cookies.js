function setCookie(){
    document.cookie = "Azekawa";
}

function getCookie(){
    if(document.cookie != ""){
        document.getElementById("user").textContent = document.cookie+'���񂱂�ɂ���';
    }
    
}