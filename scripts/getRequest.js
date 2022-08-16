let dataList = [
    {rank:1,request_name:"獣肉食ってみた",author:"azekawa",movie_count:3},
    {rank:2,request_name:"獣肉食ってみた２",author:"okada",movie_count:2},
    {rank:3,request_name:"Speak English!",author:"tom",movie_count:5},
];

function getRequestList(){
    let infoHtml = ''

    for(const data of dataList){
        infoHtml = infoHtml + '<button class="button" id="request" onclick="location.href=\'Recieve.html\'">';
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
                    infoHtml = infoHtml + '<img class="picture" src="../images/kemono.jpg" alt="picture" height="150px">';
                infoHtml = infoHtml + '</div>';
            infoHtml = infoHtml + '</div>';
        infoHtml = infoHtml + '</button>';
    }

    console.log(infoHtml);
    document.getElementById("requestList").innerHTML = infoHtml;
}


let request = {
    rank : 1,
    request_name : "サプリを飲んでみる",
    detail:"なんでもいいのでサプリを飲んで、君も意識高い系になろう！",
    author:"okada"
}

function getRequestInfo(){
   

    let infoHtml = ''
    infoHtml = infoHtml + '<img src="../images/';

    if(request.rank == 0)infoHtml = infoHtml+'icon_rank_A.svg';
    if(request.rank == 1)infoHtml = infoHtml+'icon_rank_B.svg';
    if(request.rank == 2)infoHtml = infoHtml+'icon_rank_C.svg';
    if(request.rank == 3)infoHtml = infoHtml+'icon_rank_D.svg';
    if(request.rank == 4)infoHtml = infoHtml+'icon_rank_E.svg';

    infoHtml = infoHtml + '" width= "80px">';

    infoHtml = infoHtml + '<h3>' + request.request_name + '</h3>'

    infoHtml = infoHtml + '<p>' + request.detail + '</p>';

    infoHtml = infoHtml + '<span id="author">' + request.author+ '</span>';

    console.log(infoHtml);
    document.getElementById("request").innerHTML = infoHtml;
}