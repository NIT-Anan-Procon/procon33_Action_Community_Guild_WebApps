<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/sending.css">
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

            var_dump($movie_file['error']);

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
                //HTMLのファイル制限超過
                if ($movie_file['error'] === 2) {
                  echo 'ファイルサイズを小さくしてください！';
               
                //ファイルが空
                } elseif ($movie_file['size'] === 0) {
                  echo 'ファイルを選択してください！';
               
                //望んでいるファイル形式じゃなかった場合
                // } elseif ($_FILES['upload']['type'] !== '') {
                //   echo 'テキストファイルを選択してください！';
               
                // // ふぁいるのエラーはなさそうな場合
                } elseif ($movie_file['error'] === 0) {
                    $File = new File();
                    $movie_path = $File -> uploadMovie($movie_file);

                    $path;
                    $file_name = time().'.'.pathinfo($movie_file['name'],PATHINFO_EXTENSION);

                    $uploaddir = '/var/www/html/uploads/';
                    $upload = $uploaddir.$file_name;

                    $pathdir = '/uploads/';
                    $path = $pathdir.$file_name;

                    move_uploaded_file($movie_file['tmp_name'],$upload);

                    var_dump($path);
                  // 完了メッセージを表示
                  echo '完了！';
                } else {
                  echo 'アップロードに失敗しました！';
                }
              } else {
                echo '不正なアクセスです！';
              }

            


            $Movie = new Movie();
            $Movie -> sendMovie($request_id,$user_id,$movie_path);
            
            echo "送信完了";
        ?>
    </h1>
</body>
</html>

