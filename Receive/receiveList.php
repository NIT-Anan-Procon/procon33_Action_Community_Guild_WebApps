<script>
    let dataList = [];
</script>

<?php
    ini_set('display_errors', 1);

    require_once __DIR__."/../lib/Request.php";
    require_once __DIR__."/../lib/User.php";
    require_once __DIR__."/../lib/Movie.php";

    $req  = new Request();
    $user = new User();
    $movie = new Movie();

    if(isset($_COOKIE["user_ID"])){
        $team_id = $user->getTeamID($_COOKIE["user_ID"]);    
    }
    else{
        //user_IDクッキーがない匿名のお客様。パッショーネ、匿名アリにする。
        $team_id = 0;
    }
    $data = $req->getReceivesRequestID($team_id);
    foreach($data as $key => $value){
        $request_id = $value[0];
        $request = $req->getRequest($request_id);
        $counts = $movie->getCounts($request_id);

        if($request["image_path"] == ''){
            $request["image_path"] = '../images/kemono.jpg';
        }

        ?>
        <script>
            data = {
                rank : <?php echo $request["rank"];?>,
                request_name : <?php echo '"'.$request["request_name"].'"';?>,
                author : <?php echo '"'.$request["name"].'"';?>,
                id : <?php echo '"'.$key.'"';?>,
                picture : <?php echo '"'.$request['image_path'].'"'; ?>,
                numsAnts:[
                    <?php echo $counts[0];?>,
                    <?php echo $counts[1];?>,
                    <?php echo $counts[2];?>,
                    <?php echo $counts[3];?>,
                ],
                request_id : <?php echo '"'.$request_id.'"'; ?>
            }
            dataList.push(data);
        </script>
        <?php
    }
?>



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
    <!--<button class="total" onclick="location.href='../Home/power_map.php'">
        <img src="../images/receive_total.svg" width="250">
    </button>
    <button class="legend" onclick="location.href='../Receive/legendList.php'">
        <img src="../images/receive_legend.svg" width="250">
    </button>-->
    <div id="requestList">なにもJSから受け取ってないよ</div>
</body>
</html>