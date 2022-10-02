<?php
    ini_set('display_errors', 1);

    require_once __DIR__."/../lib/Request.php";
    require_once __DIR__."/../lib/Movie.php";
    require_once __DIR__."/../lib/User.php";

    $Request = new Request();
    $Movie = new Movie();
    $User = new User();

    $request_id = $_POST["request_id"];
    echo 'request_id ='.$request_id;
    $user_id = $_COOKIE["user_ID"];
    $team_id = $User -> getTeamID($user_id);

    if(isset($_POST["team"])){
        $team_id = $_POST["team"];
    }

    $data = $Request -> getRequest($request_id);
    $counts = $Movie -> getCounts($request_id);
    $movies = $Movie -> getMovies($request_id,$team_id);

    $posterType;
    if($team_id==0)$posterType = "passione";
    if($team_id==1)$posterType = "sulserio";
    if($team_id==2)$posterType = "musica";
    if($team_id==3)$posterType = "sorpresa";

    var_dump($movies);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@11.4.33/dist/sweetalert2.all.js"></script>
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
    <script src = "../scripts/scrollMovie.js"></script>
    <script src = "../scripts/receiveAlert.js"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheets/receive.css">
    <title>receive page</title>
</head>
<body>
    
    <div id="receive">
        <div class="whole">
            <div class="first">
                <div class="left">
                    <img src="../images/<?php
                        if($data["rank"]==0) echo 'icon_rank_A.svg';
                        if($data["rank"]==1) echo 'icon_rank_B.svg';
                        if($data["rank"]==2) echo 'icon_rank_C.svg';
                        if($data["rank"]==3) echo 'icon_rank_D.svg';
                        if($data["rank"]==4) echo 'icon_rank_E.svg';
                    ?>" width="50">
                </div>
                <div class="right">
                    <div class="request-name">
                        <?php echo $data["request_name"];?>
                    </div>
                </div>
            </div>
            <div class="second">
                <div class="user-name">
                    Requested by <?php echo $data["name"];?>
                </div>
            </div>
            <div class="third">
                <div>
                    <div class="ant_passione"></div>
                    <div class="text_pa">
                        <?php echo $counts[0]; ?>
                    </div>
                </div>
                <div>
                    <div class="ant_sulserio"></div>
                    <div class="text_su">
                        <?php echo $counts[1]; ?>
                    </div>
                </div>
                <div>
                    <div class="ant_musica"></div>
                    <div class="text_mu">
                        <?php echo $counts[2]; ?>
                    </div>
                </div>
                <div>
                    <div class="ant_sorpresa"></div>
                    <div class="text_so">
                        <?php echo $counts[3]; ?>
                    </div>
                </div>
            </div>

            <div class="forth" id="forth">
                <?php
                    $count = 0;
                    foreach($movies as $value){
                        $movie = $value[0];
                        ?>
                            <div class="movie" id="movie">
                                <!--
                                    パッショーネ → poster_passione.png
                                    スルセリオ → poster_sulserio.png
                                    ムジカ → poster_musica.png
                                    ソルプリザ → poster_sorpresa.png
                                -->
                                <video id="p<?php echo $count?>" poster="../images/poster_<?php echo $posterType?>.png" preload="auto" playsinline>
                                    <source src="<?php echo $movie;?>">
                                </video>
                            </div>
                        <?php
                        $count += 1;
                    }
                ?>
            </div>
            <div class="fifth">
                <div class="detail">
                    <?php echo $data["detail"]; ?>
                </div>
            </div>
        <div>           
    </div>
    <hr width="90%">
    <div class="comment">見たい巣の動画を選択できるアリ</div>
    <button id="start">映像スタートボタン</button>
    
    <form method="post">
        <input type="hidden" name="request_id" value="<?php echo $request_id?>">
        <button name="team" value="0">
            <img src="../images/passione.svg" alt="passione" width="250">
        </button>
        <button name="team" value="1">
            <img src="../images/sulserio.svg" alt="sulserio" width="250">
        </button>
        <button name="team" value="2">
            <img src="../images/musica.svg" alt="musica" width="250">
        </button>
        <button name="team" value="3">
            <img src="../images/sorpresa.svg" alt="sorpresa" width="250">
        </button>
    </form>
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