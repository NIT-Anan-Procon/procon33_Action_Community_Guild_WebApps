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
            ini_set('display_errors', 1);
            require_once __DIR__."/../lib/Movie.php";
            require_once __DIR__."/../lib/File.php";
            

            $user_id = $_COOKIE["user_ID"];
            $request_id = $_POST["request_id"];
            $movie_file = $_FILES["movie"];


            

            $Movie = new Movie();
            $Movie -> sendMovie($request_id,$user_id,$movie_file);
            
            echo "送信完了";
        ?>
    </h1>
</body>
</html>

