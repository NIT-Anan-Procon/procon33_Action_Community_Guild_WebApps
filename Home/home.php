<script>
    let user = {
        team : 0
    }

    let members = [
        {situationImage:"example.svg",antImage:"ant_first.svg",author:"アリ次郎時貞宗次"},
        {situationImage:"example.svg",antImage:"ant_first.svg",author:"モハメドン・アリ"},
        {situationImage:"example.svg",antImage:"ant_first.svg",author:"ありよりのぉアリ"},
        {situationImage:"example.svg",antImage:"ant_first.svg",author:"アリアナグランデ"},
        {situationImage:"example.svg",antImage:"ant_first.svg",author:"アリーヴェデルチ"},
        {situationImage:"example.svg",antImage:"ant_first.svg",author:"ありまおんせん！"},
        {situationImage:"example.svg",antImage:"ant_first.svg",author:"アリあけアリーな"}
    ]
</script>
<!--authorは8文字に限定しようと思うポケモンみたいに-->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/home.css">
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
    <title>home page</title>
</head>
<body onload="getMembers();">
    <div>
        <button  class="power-map" onclick="location.href='../Home/power_map.php'">
            <img src="../images/power_map.svg" width="250">
        </button>
    </div>
    <div>
        <button  class="team" id="team" onclick="location.href='../Home/home.php'">
            <img src="../images/passione.svg" width="250">   
        </button>
    </div>
    <div id="members">
        <div class="member">
            <button class="situation">
                <img src="../images/example.svg" width="100" onclick="location.href='../Receive/receive.php'">
            </button>
            <div class="ant">
                <img src="../images/ant_first.svg" width="100">
            </div>
            <div class="name">
                これ見えてるならjsが動いてないよ
            </div>
        </div>
    </div>
    
</body>
</html>