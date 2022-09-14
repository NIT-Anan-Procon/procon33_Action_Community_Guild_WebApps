
<?php 
    ini_set('display_errors', 1);

    require_once __DIR__."/../lib/Judgement.php";
    $Judge = new Judgement();
    $req = new Request();
        
        if(isset($_POST['submit'])){
            // echo '<h1>データベースに送られるデータ</h1>';
            $judgement;
            if($_POST['submit']=="check" && isset($_POST['nicodame'])){
                $judgement = 1;
                if($_POST['nicodame']=='dame'){
                    $judgement = -1;
                }
            }
            else{
                $judgement = 0;
            }

            // echo "request_id = ".$_POST["request_id"];
            // echo "user_id = ".$_COOKIE["user_ID"];
            // echo "judgement = ".$judgement;
                      
           
            $Judge->sendJudgement($_POST["request_id"],$_COOKIE["user_ID"],$judgement);
            $Judge->getCounts($_POST["request_id"]);
        }
    ?>

<?php
    $t = $Judge->getNotJudgedRequestID($_COOKIE["user_ID"]);
    $request_id = $t["0"];
    $data = $req->getRequest($request_id);
    $counts = $Judge->getCounts($request_id);
    var_dump($counts);

?>

<script>
    let request = {
        rank : <?php echo $data["rank"];?>,
        request_name : <?php echo '"'.$data["request_name"].'"'; ?>,
        detail: <?php echo '"'.$data["detail"].'"'; ?>,
        user_name: <?php echo '"'.$data["name"].'"'; ?>,
        picture:"kemono.jpg",
    }
    //各ニコニコ数をDBから取ってくる
    let niconico = {
        passione : <?php echo $counts[0]?>,
        sulserio : <?php echo $counts[1]?>,
        musica   : <?php echo $counts[2]?>,
        sorpresa : <?php echo $counts[3]?>
    }
</script>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/judge.css">
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
    <title>Document</title>
</head>
<body onload="getRequestInfoForJudge();">
    <div id="request-info"></div>

    <form class="judge-buttons" id = "judges" method = "post">
        <input id="niconico" class="form-niconico-button" type="radio" name="nicodame" value="nico" checked>
            <label for="niconico" class="label-niconico-button">
                <img src="../images/niconico.svg" alt="niconico" width="50">
            </label>
        </input>
        <button type="submit" name="submit" value="check">
            <img src="../images/check.svg" alt="check" width="30">
        </button>
        <button type="submit" name="submit" value="refresh">
            <img src="../images/refresh.svg" alt="refresh" width="30">
        </button>
        <input id="damedame" class="form-damedame-button" type="radio" name="nicodame" value="dame">
            <label for="damedame" class="label-damedame-button">
                <img src="../images/damedame.svg" alt="damedame" width="50">
            </label>
        </input>

        <input type="hidden" name="request_id" value="<?php echo $request_id ?>">
    </form>

    
</body>
</html>