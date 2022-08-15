let dataList = [
    {rank:1,request_name:"辛いものを食べる",author:"azekawa"},
    {rank:2,request_name:"筋肉を自慢して",author:"okada"},
    {rank:3,request_name:"Speak English!",author:"tom"},
];

function getRequestList(){
    let infoHtml = ''

    for(const data of dataList){
        infoHtml = infoHtml + '<button id="request" onclick="location.href=\'Recieve.html\'">';
        infoHtml = infoHtml + '<img src="../images/';

        if(data.rank == 0)infoHtml = infoHtml+'icon_rank_A.svg';
        if(data.rank == 1)infoHtml = infoHtml+'icon_rank_B.svg';
        if(data.rank == 2)infoHtml = infoHtml+'icon_rank_C.svg';
        if(data.rank == 3)infoHtml = infoHtml+'icon_rank_D.svg';
        if(data.rank == 4)infoHtml = infoHtml+'icon_rank_E.svg';

        infoHtml = infoHtml + '" width= "80px"';
        infoHtml = infoHtml + '>';

        infoHtml = infoHtml + '<span="requestname">' + data.request_name + '</span>';
        infoHtml = infoHtml + '<span="author">' + data.author + '</span>';
        infoHtml = infoHtml + '</button><br>\n'
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