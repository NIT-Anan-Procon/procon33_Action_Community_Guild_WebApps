let dataList = [
    {rank:1,request_name:"h‚¢‚à‚Ì‚ğH‚×‚é",author:"azekawa"},
    {rank:2,request_name:"‹Ø“÷‚ğ©–‚µ‚Ä",author:"okada"},
    {rank:3,request_name:"Speak English!",author:"tom"},
];

function getMovieList(){
    let infoHtml = ''

    for(const data of dataList){
        infoHtml = infoHtml + '<button id="request" onclick="location.href=\'movie.html\'">';
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
    document.getElementById("movieList").innerHTML = infoHtml;
  
}