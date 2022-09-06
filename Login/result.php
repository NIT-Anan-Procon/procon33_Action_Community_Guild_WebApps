<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/assignment.css">
    <title>result page</title>
</head>
<body>
    <?php
        echo 'team_id ='.$_POST["team"];
        echo 'name ='.$_POST["name"];


        ini_set('display_errors', 1);
        require_once __DIR__."/../lib/User.php";
    
        $user = new User();

        $team_id;
        if($_POST["team"]=="0")$team_id=0;
        if($_POST["team"]=="1")$team_id=1;
        if($_POST["team"]=="2")$team_id=2;
        if($_POST["team"]=="3")$team_id=3;

        $name = $_POST["name"];

        $user->sendUser($name,$team_id);

        echo '<div class="main">巣への加入が完了されたアリ</div>';
        $data = $user->getUserID();

        setcookie("user_ID",(string)$data[0],time()+60*60,"/");
        echo "クッキーに入ったユーザーID:".$_COOKIE["user_ID"];
    ?>

    <a href="../Request/request.php">リクエストかくとこ</a>
    
</body>
</html>