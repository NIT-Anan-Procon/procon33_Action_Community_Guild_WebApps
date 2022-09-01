<?php
    ini_set('display_errors', "On");

    //.envを読み込むためのうんぬん    
    require './vendor/autoload.php';
    Dotenv\Dotenv::createImmutable(__DIR__)->load();
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
		echo $_ENV['hello'];
		echo '書き換えました';
	?>
        <h1>ふぁーすとぺーじ</h1>
        <a href="./View/movieList.php">視聴/View</a>
        <br>
        <a href="./Receive/receiveList.php">受注/Receive</a>
        <br>
        <a href="./Request/request.php">依頼/Request</a>
        <br>
        <a href="./Judge/judge.php">審査/Judge</a>
    </div>
</body>
</html>
