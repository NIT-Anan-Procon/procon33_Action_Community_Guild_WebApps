<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="../stylesheets/request.css">-->
    <title>REQUEST SENDING</title>
</head>
<body>
    <h1 id="status">
        <?php
            require_once __DIR__."/../lib/Request.php";
        
            $req = new Request();
            
            $user_id = 1;

            $request_name = $_POST["request_name"];
            $detail = $_POST["detail"];
            $rank;
            if($_POST["rank"]=="A")$rank=0;
            if($_POST["rank"]=="B")$rank=1;
            if($_POST["rank"]=="C")$rank=2;
            if($_POST["rank"]=="D")$rank=3;
            if($_POST["rank"]=="E")$rank=4;

            $req -> sendRequest($user_id,$request_name,$detail,$rank);
            echo "送信完了";
        ?>
    </h1>
</body>
</html>

