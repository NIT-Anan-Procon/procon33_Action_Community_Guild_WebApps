let dataList = [
    {rank:1,request_name:"êhÇ¢Ç‡ÇÃÇêHÇ◊ÇÈ",author:"azekawa"},
    {rank:2,request_name:"ãÿì˜Çé©ñùÇµÇƒ",author:"okada"},
    {rank:3,request_name:"Speak English!",author:"tom"},
];

function getMovieList(){
    let infoHtml = ''

    for(const data of dataList){
        infoHtml = infoHtml + '<button class="button" id="request" onclick="location.href=\'movie.html\'">';
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
                    infoHtml = infoHtml + '</div>';
                infoHtml = infoHtml + '</div>';
                infoHtml = infoHtml + '<div class="below">';
                    infoHtml = infoHtml + '<img class="picture" src="../images/kemono.jpg" alt="picture" height="150px">';
                infoHtml = infoHtml + '</div>';
            infoHtml = infoHtml + '</div>';
        infoHtml = infoHtml + '</button>';
    }

    console.log(infoHtml);
    document.getElementById("movieList").innerHTML = infoHtml;
  
}