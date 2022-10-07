<?php
    ini_set('display_errors', "On");

    //.envを読み込むためのうんぬん    
    //require './vendor/autoload.php';
    //Dotenv\Dotenv::createImmutable(__DIR__)->load();
?> 


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <div>

	<?php
		echo '書き換えました';
	?>
        <h1>ふぁーすとぺーじ</h1>
        <a href="./Login/start.php">最初の画面</a>
        <br>
        <a href="./Login/assignment.php">配属の画面</a>
        <br>
        <a href="./Home/home.php">ホーム画面</a>
        <br>
        <a href="./Request/request.php">依頼画面</a>
        <br>
        <a href="./Judge/judge.php">審査画面</a>
        <br>
        <a href="./Receive/receiveList.php">受注画面</a>
    </div>

    
</body>
</html>
