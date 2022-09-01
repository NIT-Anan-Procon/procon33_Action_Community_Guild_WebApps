<<<<<<< HEAD
=======
<script>
    let request = {
        rank : 4,
        request_name : "漫画の料理を完全再現してみた!",
        detail:"みんなで漫画「トリコ」に出てくるジュエルミートのような料理を完全再現しましょう！めちゃくちゃ頑張るのもヨシ！適当に作るのもヨシ！ダークマターが出来上がっても笑いあいましょう！ただし！火事にはならないように...",
        user_name:"アリ小僧",
        picture:"kemono.jpg",
    }
    //各ニコニコ数をDBから取ってくる
    let niconico = {
        passione : 3,
        sulserio : 2,
        musica   : 1,
        sorpresa : 2
    }
</script>

>>>>>>> 9b1334bd4c27d5abfa08144dd196510c49ef839c
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/judge.css">
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
<<<<<<< HEAD
    <title>judge page</title>
</head>
<body onload="getRequestInfoForJudge();">
    <div id="request-info"></div>
            
    <div class="judge-buttons">
        <button class="good-button" onclick="location.href='./result.html'">
            <img src="../images/good.svg" alt="good" height="80px">
        </button>
        <div class="counter">
            <div class="count"><img class="count1" src="../images/count_on.svg" alt="count1" width="20px"></div>
            <div class="count"><img class="count2" src="../images/count_off.svg" alt="count2" width="20px"></div>
            <div class="count"><img class="count3" src="../images/count_off.svg" alt="count3" width="20px"></div>
            <div class="count"><img class="count4" src="../images/count_off.svg" alt="count4" width="20px"></div>
            <div class="count"><img class="count5" src="../images/count_off.svg" alt="count5" width="20px"></div>
        </div>
        <button class="bad-button" type="submit" onclick="location.href='./result.html'">
            <img src="../images/bad.svg" alt="bad" width="80px">
        </div>
    </div>
=======

    <title>Document</title>
</head>
<body onload="getRequestInfoForJudge();">
    <div id="request-info"></div>

    <form class="judge-buttons" id = "judges" method = "post">
        <input type="radio" name="nicodame" value="nico">
            <img src="../images/niconico.svg" alt="niconico" width="50">
        </input>
        <button type="submit" name="submit" value="check">
            <img src="../images/check.svg" alt="check" width="30">
        </button>
        <button type="submit" name="submit" value="refresh">
            <img src="../images/refresh.svg" alt="refresh" width="30">
        </button>
        <input type="radio" name="nicodame" value="dame">
            <img src="../images/damedame.svg" alt="damedame" width="50">
        </input>
    </form>

    <?php 
        
        if(isset($_POST['submit'])){
            echo '<h1>データベースに送られるデータ</h1>';
            
            if($_POST['submit']=="check" && isset($_POST['nicodame'])){
                
            }
            else{
                $_POST['nicodame'] = NULL;
            }
            echo "<h2>nicodame:".$_POST['nicodame']."</h2>";
            echo "<h2>submit:".$_POST['submit']."</h2>";
            ?>
            <script type="text/javascript">
                request = {
                    rank : 4,
                    request_name : "リクエストの更新をしたときにこいつを表示させたい",
                    detail:"下に書いてあるのが、サーバーに送信された先ほどの依頼書の審査結果",
                    user_name:"アリ職人",
                    picture:"TomAndJerry.png",
                }
            </script>
            <?php
                      
        }      
    ?>

>>>>>>> 9b1334bd4c27d5abfa08144dd196510c49ef839c
</body>
</html>