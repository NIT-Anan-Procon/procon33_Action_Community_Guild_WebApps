<script>
    let dataList = [
    {
        rank:1,
        request_name:"漫画の料理を完全再現してみた(これ殿堂入りしてるやつやで)",
        author:"azekawa",
        movie_count:3,
        picture:"kemono.jpg",
        id:1,
        numsAnts:[1,2,2,1],
    },
    {
        rank:2,
        request_name:"獣肉食ってみた２(これ殿堂入りしてるやつやで)",
        author:"okada",
        movie_count:2,
        picture:"kemono.jpg",
        id:2,
        numsAnts:[1,2,3,1],
    },
    {
        rank:3,
        request_name:"Speak English!(これ殿堂入りしてるやつやで)",
        author:"tom",
        movie_count:5,
        picture:"TomAndJerry.png",
        id:3,
        numsAnts:[3,1,7,8],
    },
    {rank:3,
        request_name:"Speak English!(これ殿堂入りしてるやつやで)",
        author:"tom",
        movie_count:5,
        picture:"TomAndJerry.png",
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
<body onload="getLegendList();">
    <button class="total" onclick="location.href='../Home/power_map.php'">
        <img src="../images/receive_total.svg" width="250">
    </button>
    <button class="legend" onclick="history.back()">
        <img src="../images/receive_normal.svg" width="250">
    </button>

    <div id="requestList">JSから何も受け取ってないよ</div>
    
    <!--<div class="whole">
        <button onclick="location.href='../Home/power_map.html'">
            <div class="first">
                <div class="left">
                    <img src="../images/icon_rank_A.svg" width="50">
                </div>
                <div class="right">
                    <div class="request-name">
                        漫画の料理を完全再現してみた！！
                    </div>
                </div>
            </div>
            <div class="second">
                <div class="user-name">
                    Requested by 阿瀬川アリ
                </div>
            </div>
            <div class="third">
                <div>
                    <div class="ant_passione"></div>
                    <div class="text_pa">×5</div>
                </div>
                <div>
                    <div class="ant_sulserio"></div>
                    <div class="text_su">×4</div>
                </div>
                <div>
                    <div class="ant_musica"></div>
                    <div class="text_mu">×2</div>
                </div>
                <div>
                    <div class="ant_sorpresa"></div>
                    <div class="text_so">×4</div>
                </div>
            </div>
            <div class="forth">
                <img src="../images/kemono.jpg" alt="picture">
            </div>
        </button>
    </div>

    <div class="whole">
        <button onclick="location.href='../Home/power_map.html'">
            <div class="first">
                <div class="left">
                    <img src="../images/icon_rank_A.svg" width="50">
                </div>
                <div class="right">
                    <div class="request-name">
                        漫画の料理を完全再現してみた！！
                    </div>
                </div>
            </div>
            <div class="second">
                <div class="user-name">
                    Requested by 阿瀬川アリ
                </div>
            </div>
            <div class="third">
                <div>
                    <div class="ant_passione"></div>
                    <div class="text_pa">×5</div>
                </div>
                <div>
                    <div class="ant_sulserio"></div>
                    <div class="text_su">×4</div>
                </div>
                <div>
                    <div class="ant_musica"></div>
                    <div class="text_mu">×2</div>
                </div>
                <div>
                    <div class="ant_sorpresa"></div>
                    <div class="text_so">×4</div>
                </div>
            </div>
            <div class="forth">
                <img src="../images/kemono.jpg" alt="picture">
            </div>
        </button>
    </div>
    -->
</body>
</html>