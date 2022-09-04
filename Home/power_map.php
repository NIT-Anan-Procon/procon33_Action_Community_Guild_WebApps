<script>
    let power = {
        passione:2,
        sulserio:10,
        musica:1,
        sorpresa:8
    }
</script>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/power_map.css">
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
    <title>power map page</title>
</head>
<body onload="getPower();">
    <button class="back" onclick="history.back()">
        <img src="../images/back.svg" width="30">
    </button>
    <div class="whole">
        <div class="team">
            <div class="icon">
                <img src="../images/icon_passione.svg" width="40" alt="passione">
            </div>
            <div class="icon">
                <img src="../images/icon_sulserio.svg" width="40" alt="sulserio">
            </div>
            <div class="icon">
                <img src="../images/icon_musica.svg" width="40" alt="musica">
            </div>
            <div class="icon">
                <img src="../images/icon_sorpresa.svg" width="40" alt="sorpresa">
            </div>
        </div>
        <div class="power" id="power">
            <!--<div class="power-passione">
                <div class="data"></div>
                <div class="data"></div>
                <div class="data"></div>
            </div>
            <div class="power-sulserio">
                <div class="data"></div>
                <div class="data"></div>
                <div class="data"></div>
            </div>
            <div class="power-musica">
                <div class="data"></div>
                <div class="data"></div>
                <div class="data"></div>
                <div class="data"></div>
                <div class="data"></div>
            </div>
            <div class="power-sorpresa">
                <div class="data"></div>
                <div class="data"></div>
            </div>-->
        </div>
    </div>
    <div class="title">月間総勢力図</div>
</body>
</html>