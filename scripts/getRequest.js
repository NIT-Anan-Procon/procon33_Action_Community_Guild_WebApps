//ここのJS関数はphpで全く同じことが出来るが、開発の都合上JSの関数でinnerHtmlを用いて実装している。
//これからの開発でphpに全て移したい。

//依頼書リストの表示
function getRequestList(){
    let infoHtml = '';
    infoHtml += '<form action = "receive.php" method="post">';
        for(const data of dataList){
            infoHtml += '<div class="whole" id="';
            infoHtml += data.id.toString();
            infoHtml += '">';
            infoHtml += '<button type="submit" name = "request_id"';
                infoHtml += 'value = "'+data.request_id+'"';
            infoHtml += '>';
                infoHtml += '<div class="first">';
                    infoHtml += '<div class="left">';
                        infoHtml += '<img class="rank" src="../images/';
                            if(data.rank == 0)infoHtml += 'icon_rank_A.svg';
                            if(data.rank == 1)infoHtml += 'icon_rank_B.svg';
                            if(data.rank == 2)infoHtml += 'icon_rank_C.svg';
                            if(data.rank == 3)infoHtml += 'icon_rank_D.svg';
                            if(data.rank == 4)infoHtml += 'icon_rank_E.svg';
                            infoHtml += '" width= "50px"';
                        infoHtml += '>';
                    infoHtml += '</div>';
                    infoHtml += '<div class="right">';
                        infoHtml += '<div class="request-name">';
                            infoHtml += data.request_name;
                        infoHtml += '</div>';
                    infoHtml += '</div>';
                infoHtml += '</div>';
                infoHtml += '<div class="second">';
                    infoHtml += '<div class="user-name">';
                        infoHtml += 'Requested by ' + data.author;
                    infoHtml += '</div>';
                infoHtml += '</div>';
                infoHtml += '<div class="third">';
                    infoHtml += '<div>';
                        infoHtml += '<div class="ant_passione"></div>';
                        infoHtml += '<div class="text_pa">' + data.numsAnts[0] + '</div>';
                    infoHtml += '</div>';
                    infoHtml += '<div>';
                        infoHtml += '<div class="ant_sulserio"></div>';
                        infoHtml += '<div class="text_su">' + data.numsAnts[1] + '</div>';
                    infoHtml += '</div>';
                    infoHtml += '<div>';
                        infoHtml += '<div class="ant_musica"></div>';
                        infoHtml += '<div class="text_mu">' + data.numsAnts[2] + '</div>';
                    infoHtml += '</div>';
                    infoHtml += '<div>';
                        infoHtml += '<div class="ant_sorpresa"></div>';
                        infoHtml += '<div class="text_so">' + data.numsAnts[3] + '</div>';
                    infoHtml += '</div>';
                infoHtml += '</div>';
                infoHtml += '<div class="forth">';
                    infoHtml += '<img class="image" src="'+ data.picture +'" alt="picture">';
                infoHtml += '</div>';
            infoHtml += '</button>';
            infoHtml += '</div>';

        }
    infoHtml += "</form>";
    
    console.log(infoHtml);
    document.getElementById("requestList").innerHTML = infoHtml;

    for(const data of dataList){
        var elem = document.getElementById(data.id.toString());
        switch(data.rank) {
            case 0: elem.style = "border: 3px solid #AA68C7;"; break;
            case 1: elem.style = "border: 3px solid #FF9FCD;"; break;
            case 2: elem.style = "border: 3px solid #FFDE8A;"; break;
            case 3: elem.style = "border: 3px solid #C3F2ED;"; break;
            case 4: elem.style = "border: 3px solid #A0DE8B;"; break;
        }
    }
}

//審査画面で使う依頼書出力
function getRequestInfoForJudge(){
    let infoHtml = '';
    infoHtml += '<div class="request-whole" id="request-whole">';
        infoHtml += '<div class="first">';
            infoHtml += '<div class="left">';
                infoHtml += '<div class="rank">';
                    infoHtml += '<img class="rank" src="../images/';
                        if(request.rank == 0)infoHtml += 'icon_rank_A.svg';
                        if(request.rank == 1)infoHtml += 'icon_rank_B.svg';
                        if(request.rank == 2)infoHtml += 'icon_rank_C.svg';
                        if(request.rank == 3)infoHtml += 'icon_rank_D.svg';
                        if(request.rank == 4)infoHtml += 'icon_rank_E.svg';
                        infoHtml += '" width= "50px"';
                    infoHtml += '>';
                infoHtml += '</div>';
            infoHtml += '</div>';
            infoHtml += '<div class="right">';
                infoHtml += '<div class="request-name">';
                    infoHtml += request.request_name;
                infoHtml += '</div>';
            infoHtml += '</div>';
        infoHtml += '</div>';
        infoHtml += '<div class="second">';
            infoHtml += '<div class="user-name">';
                infoHtml += 'Requested by ' + request.user_name;
            infoHtml += '</div>';
        infoHtml += '</div>';
        infoHtml += '<div class="third">';
            infoHtml += '<img src="'+ request.picture + '">';
        infoHtml += '</div>';
        infoHtml += '<div class="forth">';
            infoHtml += '<div class="niconico">';
                infoHtml += '<div>';
                    infoHtml += '<img class="niconico_passione" src="../images/niconico_passione.svg" width="30">';
                    infoHtml += '<div class="text_pa">' + niconico.passione + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
            infoHtml += '<div class="niconico">';
                infoHtml += '<div>';
                    infoHtml += '<img class="niconico_sulserio" src="../images/niconico_sulserio.svg" width="30">';
                    infoHtml += '<div class="text_su">' + niconico.sulserio + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
            infoHtml += '<div class="niconico">';
                infoHtml += '<div>';
                    infoHtml += '<img class="niconico_musica" src="../images/niconico_musica.svg" width="30">';
                    infoHtml += '<div class="text_mu">' + niconico.musica + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
            infoHtml += '<div class="niconico">';
                infoHtml += '<div>';
                    infoHtml += '<img class="niconico_sorpresa" src="../images/niconico_sorpresa.svg" width="30">';
                    infoHtml += '<div class="text_so">' + niconico.sorpresa + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
        infoHtml += '</div>';
        infoHtml += '<div class="fifth">';
            infoHtml += '<div class="detail">';
                infoHtml += request.detail;
            infoHtml += '</div>';
        infoHtml += '</div>';
    infoHtml += '</div>';

    console.log(infoHtml);
    document.getElementById("request-info").innerHTML = infoHtml;

    var elem = document.getElementById("request-whole");
    switch(request.rank) {
        case 0: elem.style = "border: 3px solid #AA68C7;"; break;
        case 1: elem.style = "border: 3px solid #FF9FCD;"; break;
        case 2: elem.style = "border: 3px solid #FFDE8A;"; break;
        case 3: elem.style = "border: 3px solid #C3F2ED;"; break;
        case 4: elem.style = "border: 3px solid #A0DE8B;"; break;
    }
}

//勢力図の出力
function getPower(){
    powerHtml = '';

    powerHtml += "<div class=\"power-passione\">";
        for(let i=0;i<power.passione;i++)powerHtml+='<div class="data"></div>';
    powerHtml += "</div>";

    powerHtml += "<div class=\"power-sulserio\">";
        for(let i=0;i<power.sulserio;i++)powerHtml+='<div class="data"></div>';
    powerHtml += "</div>";

    powerHtml += "<div class=\"power-musica\">";
    for(let i=0;i<power.musica;i++)powerHtml+='<div class="data"></div>';
    powerHtml += "</div>";

    powerHtml += "<div class=\"power-sorpresa\">";
    for(let i=0;i<power.sorpresa;i++)powerHtml+='<div class="data"></div>';
    powerHtml += "</div>"

    console.log(powerHtml);
    document.getElementById("power").innerHTML = powerHtml;
}