function getRequestList(){
    let infoHtml = '';
    infoHtml += '<form action = "receive.php" method="post">';
        for(const data of dataList){
            infoHtml += '<div class="whole" id="';
            infoHtml += data.id.toString();
            infoHtml += '">';
            infoHtml += '<button type="submit" name = "button"';
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
                        infoHtml += '<div class="text_pa">x' + data.numsAnts[0] + '</div>';
                    infoHtml += '</div>';
                    infoHtml += '<div>';
                        infoHtml += '<div class="ant_sulserio"></div>';
                        infoHtml += '<div class="text_su">x' + data.numsAnts[1] + '</div>';
                    infoHtml += '</div>';
                    infoHtml += '<div>';
                        infoHtml += '<div class="ant_musica"></div>';
                        infoHtml += '<div class="text_mu">x' + data.numsAnts[2] + '</div>';
                    infoHtml += '</div>';
                    infoHtml += '<div>';
                        infoHtml += '<div class="ant_sorpresa"></div>';
                        infoHtml += '<div class="text_so">x' + data.numsAnts[3] + '</div>';
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

function getLegendList(){
    let infoHtml = ''
    for(const data of dataList){
        infoHtml += '<div class="whole" id="'
        infoHtml += data.id.toString();
        infoHtml += '">';
        infoHtml += '<button onclick="location.href=\'../Home/power_map.php\'">';
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
                    infoHtml += '<div class="text_pa">�~' + data.numsAnts[0] + '</div>';
                infoHtml += '</div>';
                infoHtml += '<div>';
                    infoHtml += '<div class="ant_sulserio"></div>';
                    infoHtml += '<div class="text_su">�~' + data.numsAnts[1] + '</div>';
                infoHtml += '</div>';
                infoHtml += '<div>';
                    infoHtml += '<div class="ant_musica"></div>';
                    infoHtml += '<div class="text_mu">�~' + data.numsAnts[2] + '</div>';
                infoHtml += '</div>';
                infoHtml += '<div>';
                    infoHtml += '<div class="ant_sorpresa"></div>';
                    infoHtml += '<div class="text_so">�~' + data.numsAnts[3] + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
            infoHtml += '<div class="forth">';
                infoHtml += '<img class="image" src="../images/'+ data.picture +'" alt="picture">';
            infoHtml += '</div>';
        infoHtml += '</button>';
        infoHtml += '</div>';

    }
    
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
                    infoHtml += '<div class="text_pa">x' + niconico.passione + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
            infoHtml += '<div class="niconico">';
                infoHtml += '<div>';
                    infoHtml += '<img class="niconico_sulserio" src="../images/niconico_sulserio.svg" width="30">';
                    infoHtml += '<div class="text_su">x' + niconico.sulserio + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
            infoHtml += '<div class="niconico">';
                infoHtml += '<div>';
                    infoHtml += '<img class="niconico_musica" src="../images/niconico_musica.svg" width="30">';
                    infoHtml += '<div class="text_mu">x' + niconico.musica + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
            infoHtml += '<div class="niconico">';
                infoHtml += '<div>';
                    infoHtml += '<img class="niconico_sorpresa" src="../images/niconico_sorpresa.svg" width="30">';
                    infoHtml += '<div class="text_so">x' + niconico.sorpresa + '</div>';
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

function getRequestInfoForReceive(){
   
    let infoHtml = ''
    infoHtml += '<div class="whole">';
        infoHtml += '<div class="above">';
            infoHtml += '<div class="left">';
                infoHtml += '<img class="rank" src="../images/';
                if(request.rank == 0)infoHtml += 'icon_rank_A.svg';
                if(request.rank == 1)infoHtml += 'icon_rank_B.svg';
                if(request.rank == 2)infoHtml += 'icon_rank_C.svg';
                if(request.rank == 3)infoHtml += 'icon_rank_D.svg';
                infoHtml += '" width= "50px"';
                infoHtml += '>';
            infoHtml += '</div>';
            infoHtml += '<div class="right">';
                infoHtml += '<div class="request-name">' + request.request_name + '</div>';
                infoHtml += '<div class="user-name">' + "requested by " + request.user_name + '</div>';
            infoHtml += '</div>';
        infoHtml += '</div>';

        infoHtml += '<video class="movie" controls width="100%">';
            infoHtml += '<source src="../videos/nanika.mp4" type="video/mp4">';
        infoHtml += '</video>';

        infoHtml += '<div class="middle">';
            infoHtml += '<div class="detail">'+ request.detail +'</div>';
        infoHtml += '</div>';

        infoHtml += '<div class="below">';
            infoHtml += '<div class="ants">';
                infoHtml += '<div>';
                    infoHtml += '<div class="ant_passione"></div>';
                    infoHtml += '<div class="text_pa">x' + 1 + '</div>';
                infoHtml += '</div>';
                infoHtml += '<div>';
                    infoHtml += '<div class="ant_sulserio"></div>';
                    infoHtml += '<div class="text_su">x' + 2 + '</div>';
                infoHtml += '</div>';
                infoHtml += '<div>';
                    infoHtml += '<div class="ant_musica"></div>';
                    infoHtml += '<div class="text_mu">x' + 2 + '</div>';
                infoHtml += '</div>';
                infoHtml += '<div>';
                    infoHtml += '<div class="ant_sorpresa"></div>';
                    infoHtml += '<div class="text_so">x' + 1 + '</div>';
                infoHtml += '</div>';
            infoHtml += '</div>';
        infoHtml += '</div>';
    infoHtml += '</div>';

    console.log(infoHtml);
    document.getElementById("request-info").innerHTML = infoHtml;
}

function getRequestInfoForMovie(){
   
    let infoHtml = ''
    infoHtml = infoHtml + '<div class="request-whole">';
        infoHtml = infoHtml + '<div class="above">';
            infoHtml = infoHtml + '<div class="left">';
                infoHtml = infoHtml + '<img class="rank" src="../images/';
                if(request.rank == 0)infoHtml = infoHtml + 'icon_rank_A.svg';
                if(request.rank == 1)infoHtml = infoHtml + 'icon_rank_B.svg';
                if(request.rank == 2)infoHtml = infoHtml + 'icon_rank_C.svg';
                if(request.rank == 3)infoHtml = infoHtml + 'icon_rank_D.svg';
                infoHtml = infoHtml + '" width= "50px"';
                infoHtml = infoHtml + '>';
            infoHtml = infoHtml + '</div>';
            infoHtml = infoHtml + '<div class="right">';
                infoHtml = infoHtml + '<div class="request-name">' + request.request_name + '</div>';
                infoHtml = infoHtml + '<div class="user-name">' + "requested by " + request.user_name + '</div>';
            infoHtml = infoHtml + '</div>';
        infoHtml = infoHtml + '</div>';

        infoHtml = infoHtml + '<video class="movie" controls width="100%">';
            infoHtml = infoHtml + '<source src="../videos/nanika.mp4" type="video/mp4">';
        infoHtml = infoHtml + '</video>';

        infoHtml = infoHtml + '<div class="middle">';
            infoHtml = infoHtml + '<div class="detail">'+ request.detail +'</div>';
        infoHtml = infoHtml + '</div>';

    infoHtml = infoHtml + '</div>';

    console.log(infoHtml);
    document.getElementById("request-info").innerHTML = infoHtml;
}

function getReceive(){
    let infoHtml = '';

    infoHtml += '<div class="whole">';
        infoHtml += '<div class="first">';
            infoHtml += '<div class="left">';
                infoHtml += '<img src="../images/';
                if(data.rank == 0)infoHtml += 'icon_rank_A.svg';
                if(data.rank == 1)infoHtml += 'icon_rank_B.svg';
                if(data.rank == 2)infoHtml += 'icon_rank_C.svg';
                if(data.rank == 3)infoHtml += 'icon_rank_D.svg';
                if(data.rank == 4)infoHtml += 'icon_rank_E.svg';
                infoHtml += '" width="50">';
            infoHtml += '</div>';
            infoHtml += '<div class="right">';
                infoHtml += '<div class="request-name">'
                    infoHtml += data.name;
                infoHtml += '</div>';
            infoHtml += '</div>';
        infoHtml += '</div>';
        infoHtml += '<div class="second">';
            infoHtml += '<div class="user-name">';
                infoHtml += 'Requested by '+data.author;
            infoHtml += "</div>";
        infoHtml += '</div>';
        infoHtml += '<div class="third">';
            infoHtml += '<div>';
                    infoHtml += '<div class="ant_passione"></div>';
                    infoHtml += '<div class="text_pa">x';
                        infoHtml += data.ant[0];
                    infoHtml += '</div>';
            infoHtml +='</div>';

            infoHtml += '<div>';
                    infoHtml += '<div class="ant_sulserio"></div>';
                    infoHtml += '<div class="text_su">x';
                        infoHtml += data.ant[1];
                    infoHtml += '</div>';
            infoHtml +='</div>';

            infoHtml += '<div>';
                    infoHtml += '<div class="ant_musica"></div>';
                    infoHtml += '<div class="text_mu">x';
                        infoHtml += data.ant[2];
                    infoHtml += '</div>';
            infoHtml +='</div>';

            infoHtml += '<div>';
                    infoHtml += '<div class="ant_sorpresa"></div>';
                    infoHtml += '<div class="text_so">x';
                        infoHtml += data.ant[3];
                    infoHtml += '</div>';
            infoHtml +='</div>';
        infoHtml += '</div>';

        infoHtml += '<div class="forth">';
            var count = 0;
            for(const movie of data.movies){
                infoHtml += '<video class="movie" width="100%" height="" id="p';
                infoHtml += count++;
                infoHtml += '" poster="../images/poster_passione.png" controls>';
                infoHtml += '<source src="';
                    infoHtml += movie;
                    infoHtml += '" type="video/mp4">';
                infoHtml += '</video>';
            }
        infoHtml += '</div>';
        infoHtml += '<div class="fifth">';
            infoHtml += '<div class="detail">';
                infoHtml += data.detail;
            infoHtml += '</div>'
        infoHtml += '</div>';
    infoHtml += '</div>';

    console.log(infoHtml);
    document.getElementById("receive").innerHTML = infoHtml;
}

function getMembers(){
    let team = '';
    if(user.team == 0)team = "passione";
    if(user.team == 1)team = "sulserio";
    if(user.team == 2)team = "musica";
    if(user.team == 3)team = "sorpresa";

    let imgHtml = '<img src="../images/';
    imgHtml += team;
    imgHtml += '.svg" width="250">';

    document.getElementById("team").innerHTML = imgHtml;


    let infoHtml = '';

    for(let member of members){
        infoHtml += '<div class="member">'
            infoHtml += '<button class="situation">';
                infoHtml += '<img src="../images/'
                infoHtml += member.situationImage;
                infoHtml += '" width="100" onclick="location.href=\'../Receive/receive.php\'">';
            infoHtml += '</button>';
            infoHtml += '<div class="ant">';
                infoHtml += '<img src="../images/';
                infoHtml += member.antImage;
                infoHtml += '" width="100">';
            infoHtml += '</div>';
            infoHtml += '<div class="name">';
                infoHtml += member.author;
            infoHtml += '</div>';
        infoHtml += '</div>'
    }

    console.log(infoHtml);
    document.getElementById("members").innerHTML = infoHtml; 
}


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