function loader(){
    let url = new URL(window.location.href);
    let params = url.searchParams;

    console.log(params.get('result'));

    document.getElementById("content").textContent = params.get('result');

    //出力

    //動画の出力
    let movieHtml = '<video controls width="100%">'
    movieHtml = movieHtml + '<source src="../videos/nanika.mp4" type="video/mp4">'
    movieHtml = movieHtml + '</video>';
    console.log(movieHtml);
    document.getElementById("movie").innerHTML = movieHtml;

    //依頼書画面出力
    let request = {
        rank : 1,
        name : "サプリを飲んでみる",
        detail:"なんでもいいのでサプリを飲んで、君も意識高い系になろう！"
    }

    let infoHtml = ''
    infoHtml = infoHtml + '<img src="../images/';

    if(request.rank == 0)infoHtml = infoHtml+'icon_rank_A.svg';
    if(request.rank == 1)infoHtml = infoHtml+'icon_rank_B.svg';
    if(request.rank == 2)infoHtml = infoHtml+'icon_rank_C.svg';
    if(request.rank == 3)infoHtml = infoHtml+'icon_rank_D.svg';
    if(request.rank == 4)infoHtml = infoHtml+'icon_rank_E.svg';

    infoHtml = infoHtml + '" width= "80px">';

    infoHtml = infoHtml + '<h3>' + request.name + '</h3>'

    infoHtml = infoHtml + '<p>' + request.detail + '</p';

    console.log(infoHtml);
    document.getElementById("info").innerHTML = infoHtml;
}