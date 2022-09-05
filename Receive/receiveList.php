<script>
    let dataList = [
    {
        rank:1,
        request_name:"漫画の料理を完全再現してみた",
        author:"azekawa",
        movie_count:3,
        picture:"kemono.jpg",
        id:1,
        numsAnts:[1,2,2,1],
    },
    {
        rank:2,
        request_name:"獣肉食ってみた!",
        author:"okada",
        movie_count:2,
        picture:"kemono.jpg",
        id:2,
        numsAnts:[1,2,3,1],
    },
    {
        rank:3,
        request_name:"Speak English!",
        author:"tom",
        movie_count:5,
        picture:"TomAndJerry.png",
        id:3,
        numsAnts:[3,1,7,8],
    },
    {rank:3,
        request_name:"Speak English!",
        author:"tom",
        movie_count:5,
        picture:"kemono.jpg",
        id:4,
        numsAnts:[3,2,1,5],
    }
    ];
</script>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheets/receiveList.css">
    <title>receive page</title>
</head>
<body onload="getRequestList();">
    <button class="total" onclick="location.href='../Home/power_map.php'">
        <img src="../images/receive_total.svg" width="250">
    </button>
    <button class="legend" onclick="location.href='../Receive/legendList.php'">
        <img src="../images/receive_legend.svg" width="250">
    </button>
    <div id="requestList">なにもJSから受け取ってないよ</div>
</body>
</html>