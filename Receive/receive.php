<?php
    ini_set('display_errors', 1);

    require_once __DIR__."/../lib/Request.php";
    require_once __DIR__."/../lib/Movie.php";
    require_once __DIR__."/../lib/User.php";

    $Request = new Request();
    $Movie = new Movie();
    $User = new User();

    $request_id = $_POST["button"];
    $user_id = $_COOKIE["user_ID"];
    $team_id = $User -> getTeamID($user_id);

    $data = $Request -> getRequest($request_id);
    $counts = $Movie -> getCounts($request_id);
    $movies = $Movie -> getMovies($request_id,$team_id);

    var_dump($movies);
?>

<script>
    let data = {
        rank : "<?php echo $data["rank"]?>",
        name : "<?php echo $data["request_name"]?>",
        author : "<?php echo $data["name"]?>",
        detail : "<?php echo $data["detail"]?>",
        ant : [
            <?php echo $counts[0]?>,
            <?php echo $counts[1]?>,
            <?php echo $counts[2]?>,
            <?php echo $counts[3]?>,
        ],
        movies : [
            <?php 
                foreach($movies as $movie){
                    echo '"'.$movie[0].'",';
                }
            ?>
        ],
        
        
    }
</script>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@11.4.33/dist/sweetalert2.all.js"></script>
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
    <script src = "../scripts/#scrollMovie.js"></script>
    <script src = "../scripts/receiveAlert.js"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheets/receive.css">
    <title>receive page</title>
</head>
<body onload = "getReceive();">
    
    <div id="receive"></div>
    <hr width="90%">
    <div class="comment">見たい巣の動画を選択できるアリ</div>
    <button>
        <img src="../images/passione.svg" alt="passione" width="250">
    </button>
    <button>
        <img src="../images/sulserio.svg" alt="sulserio" width="250">
    </button>
    <button>
        <img src="../images/musica.svg" alt="musica" width="250">
    </button>
    <button>
        <img src="../images/sorpresa.svg" alt="sorpresa" width="250">
    </button>
    <hr width="90%">
    <form action="sending.php" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="MAX_FILE_SIZE" value="80000000">
        <input type="hidden" name="request_id" value="<?php echo $request_id?>">
        <input type="file" id="add-movie" name="movie" class="form-add-movie">
        <label for="add-movie" name="movie">
            <img src="../images/add_movie.svg" width="250" class="add-movie">
        </label>
        <button type="submit" class="send-movie" id="send-movie" disabled>
            <img src="../images/send_movie.svg" width="250">
        </button>
    </form>
    
</body>
</html>