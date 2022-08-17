let dataList = [
    {rank:1,request_name:"漫画の料理を完全再現してみた",author:"azekawa",movie_count:3,picture:"kemono.jpg"},
    {rank:2,request_name:"獣肉食ってみた２",author:"okada",movie_count:2,picture:"kemono.jpg"},
    {rank:3,request_name:"Speak English!",author:"tom",movie_count:5,picture:"kemono.jpg"},
];

function getRequestList(){
    let infoHtml = ''

    for(const data of dataList){
        infoHtml = infoHtml + '<button class="button" id="request" onclick="location.href=\'receive.html\'">';
            infoHtml = infoHtml + '<div class="whole">';
                infoHtml = infoHtml + '<div class="above">';
                    infoHtml = infoHtml + '<div class="left">';
                        infoHtml = infoHtml + '<img class="rank" src="../images/';
                        if(data.rank == 0)infoHtml = infoHtml + 'icon_rank_A.svg';
                        if(data.rank == 1)infoHtml = infoHtml + 'icon_rank_B.svg';
                        if(data.rank == 2)infoHtml = infoHtml + 'icon_rank_C.svg';
                        if(data.rank == 3)infoHtml = infoHtml + 'icon_rank_D.svg';
                        if(data.rank == 4)infoHtml = infoHtml + 'icon_rank_E.svg';
                        infoHtml = infoHtml + '" width= "50px"';
                        infoHtml = infoHtml + '>';
                    infoHtml = infoHtml + '</div>';
                    infoHtml = infoHtml + '<div class="right">';
                        infoHtml = infoHtml + '<div class="request-name">' + data.request_name + '</div>';
                        infoHtml = infoHtml + '<div class="user-name">' + data.author + '</div>';
                        infoHtml = infoHtml + '<div class="ants">';
                            for(let i = 1; i <= data.movie_count; i++) {
                                infoHtml = infoHtml + '<div class="ant"></div>';
                            }
                        infoHtml = infoHtml + '</div>';
                    infoHtml = infoHtml + '</div>';
                infoHtml = infoHtml + '</div>';
                infoHtml = infoHtml + '<div class="below">';
                    infoHtml = infoHtml + '<img class="picture" src="../images/' + data.picture + '" alt="picture" height="150px">';
                infoHtml = infoHtml + '</div>';
            infoHtml = infoHtml + '</div>';
        infoHtml = infoHtml + '</button>';
    }

    console.log(infoHtml);
    document.getElementById("requestList").innerHTML = infoHtml;
}


let request = {
    rank : 0,
    request_name : "漫画の料理を完全再現してみた!",
    detail:"みんなで漫画「トリコ」に出てくるジュエルミートのような料理を完全再現しましょう！めちゃくちゃ頑張るのもヨシ！適当に作るのもヨシ！ダークマターが出来上がっても笑いあいましょう！ただし！火事にはならないように...",
    user_name:"okada",
    picture:"kemono.jpg",
    movie_count:3
}

function getRequestInfoForJudge(){
   
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

        infoHtml = infoHtml + '<div class="middle">';
            infoHtml = infoHtml + '<div class="detail">'+ request.detail +'</div>';
        infoHtml = infoHtml + '</div>';

        infoHtml = infoHtml + '<div class="below">';
            infoHtml = infoHtml + '<img class="picture" src="../images/' + request.picture + '" alt="picture" height="150px">';
        infoHtml = infoHtml + '</div>';
    infoHtml = infoHtml + '</div>';

    console.log(infoHtml);
    document.getElementById("request-info").innerHTML = infoHtml;
}

function getRequestInfoForReceive(){
   
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

        infoHtml = infoHtml + '<div class="below">';
            infoHtml = infoHtml + '<div class="ants">';
                for(let i = 1; i <= request.movie_count; i++) {
                    infoHtml = infoHtml + '<div class="ant"></div>';
                }
            infoHtml = infoHtml + '</div>';
        infoHtml = infoHtml + '</div>';

    infoHtml = infoHtml + '</div>';

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

