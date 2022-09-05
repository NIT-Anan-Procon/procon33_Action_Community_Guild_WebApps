<script>
    let data = {
        rank : 0,
        name : "漫画の料理を完全再現してみた！",
        author : "阿瀬川アリ",
        ant : [5,4,2,4],
        movies : ["nanika.mp4","nanika.mp4","nanika.mp4","nanika.mp4"],
        detail : "みんなで漫画「トリコ」に出てくるジュエルミートのような料理を完全再現しましょう！めちゃくちゃ頑張るのもヨシ！適当に作るのもヨシ！ダークマターが出来上がっても笑いあいましょう！ただし！火事にはならないように"
    }
</script>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/#">
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
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
    <form action="test.html" method="post" enctype="multipart/form-data" >
        <input type="file" id="add-movie" name="add-movie" class="form-add-movie">
        <label for="add-movie" name="add-movie">
            <img src="../images/add_movie.svg" width="250" class="add-movie">
        </label>
        <button type="submit" class="send-movie">
            <img src="../images/send_movie.svg" width="250">
        </button>
    </form>
    
</body>
</html>