<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/assignment.css">
    <title>assignment page</title>
</head>
<body onload="name();">
    <div class="main">あなたの配属する”巣”をお選びください</div>

    <form action="../Login/result.php" method="post">
        <div class="text">動画のために体を張れる情熱があるなら</div>
        <input id="image_passione" type="radio" value="0" name="team" checked>
        <label for="image_passione" class="assign">
            <img src="../images/passione.svg" alt="passione" width="250">
        </label>
        
        <div class="text">編集を多用して高クオリティを目指すなら</div>
        <input id="image_sulserio" type="radio" value="1" name="team">
        <label for="image_sulserio" class="assign">
            <img src="../images/sulserio.svg" alt="sulserio" width="250">
        </label>

        <div class="text">音楽方面の動画を投稿したいなら</div>
        <input id="image_musica" type="radio" value="2" name="team">
        <label for="image_musica" class="assign">
            <img src="../images/musica.svg" alt="musica" width="250">
        </label>

        <div class="text">人のためのサプライズ動画を投稿したいなら</div>
        <input id="image_sorpresa" type="radio" value="3" name="team">
        <label for="image_sorpresa" class="assign">
            <img src="../images/sorpresa.svg" alt="sorpresa" width="250">
        </label>
        
        <span id="hidden">
            書き換えれてない
        </span>

        <div class="assign-submit">
            <button type="submit"><img src="../images/check.svg" alt="送信" width="30"></button>
        </div>
    </form>

<script>
function getName() {
    const array1 = ["アル", "ウブ", "オツ", "サギ", "タマ", "チビ", "イイ", "サム", "ジン", "ドン", "リン"];
    const array2 = ["ギガ", "スト", "デデ", "キル", "アカ", "マク", "ジン", "クロ", "ゼロ", "マル", "ドル"];
    const array3 = ["オオアリ", "ヤマアリ", "アゲアリ", "ハリアリ", "シケアリ", "シロアリ", "イロアリ", "ルリアリ", "ガキアリ", "シワアリ", "蟻六十郎"];
    const arraySpecial = ["アリアナグランデ","アリトキリギリス","アリゲーターガー","アリザリンレッド","サンクチュアリー","ジャイアントモア","アントファガスタ","アリスタルコス　","アリストテレス　","アリーヴェデルチ","ありあけアリーナ"];
    if((Math.floor(Math.random() * 50)) == 0) {
        return arraySpecial[(Math.floor(Math.random() * 11))];
    }else {
        return array1[Math.floor(Math.random() * 11)] + array2[Math.floor(Math.random() * 11)] + array3[Math.floor(Math.random() * 11)];
    }
}

function name(){
    info = '<input name="name" class="name" value="'+getName()+'">';
    console.log(info);
	document.getElementById("hidden").innerHTML=info;
}

</script>
</body>
</html>