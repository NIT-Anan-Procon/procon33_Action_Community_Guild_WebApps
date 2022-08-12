let dataList = [
    {rank:1,requestname:"辛いものを食べる",author:"azekawa"},
    {rank:2,requestname:"筋肉を自慢して",author:"okada"},
    {rank:3,requestname:"Speak English!",author:"tom"},
];

function dispRequestList(){
    let text = '';

    let infoHtml = ''

    for(const data of dataList){
        infoHtml = infoHtml + '<button id="request" >';
        infoHtml = infoHtml + '<img src="./images/';

        if(data.rank == 0)infoHtml = infoHtml+'icon_rank_A.svg';
        if(data.rank == 1)infoHtml = infoHtml+'icon_rank_B.svg';
        if(data.rank == 2)infoHtml = infoHtml+'icon_rank_C.svg';
        if(data.rank == 3)infoHtml = infoHtml+'icon_rank_D.svg';
        if(data.rank == 4)infoHtml = infoHtml+'icon_rank_E.svg';

        infoHtml = infoHtml + '" width= "80px">';

        infoHtml = infoHtml + '<span="requestname">' + data.requestname + '</span>';
        infoHtml = infoHtml + '<span="author">' + data.author + '</span>';
        infoHtml = infoHtml + '</button><br>\n'
    }
    console.log(infoHtml);
    document.getElementById("requestList").innerHTML = infoHtml;
  
}

function getRequest(){
    let request = {
        rank : 1,
        request_name : "サプリを飲んでみる",
        detail:"なんでもいいのでサプリを飲んで、君も意識高い系になろう！",
        author:"okada"
    }

    let infoHtml = ''
    infoHtml = infoHtml + '<img src="./images/';

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