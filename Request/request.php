<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@11.4.33/dist/sweetalert2.all.js"></script>
    <script src = "../scripts/confirmAlert.js"></script>
    <link rel="stylesheet" href="../stylesheets/request.css">
    <title>REQUEST SCREEN</title>
</head>
<body>

    <form action="sending.php" method="post" enctype="multipart/form-data">
        <div class="text-top">依頼名を入力するアリ</div>
        <input type="text" id="request-name" name="request_name" class="form-request-name">

        <div class="text">依頼名ランクを選択するアリ</div>
        <div class="ranks">
        <input id="A" type="radio" name="rank" class="form-request-rank" value="A" checked="checked">
        <label for="A" class="label-request-rank">
            <img src="../images/icon_rank_A.svg" width="40" height="40">
        </label>
        <input id="B" type="radio" name="rank" class="form-request-rank" value="B">
        <label for="B" class="label-request-rank">
            <img src="../images/icon_rank_B.svg" width="40" height="40">
        </label>
        <input id="C" type="radio" name="rank" class="form-request-rank" value="C">
        <label for="C" class="label-request-rank">
            <img src="../images/icon_rank_C.svg" width="40" height="40">
        </label>
        <input id="D" type="radio" name="rank" class="form-request-rank" value="D">
        <label for="D" class="label-request-rank">
            <img src="../images/icon_rank_D.svg" width="40" height="40">
        </label>
        <input id="E" type="radio" name="rank" class="form-request-rank" value="E">
        <label for="E" class="label-request-rank">
            <img src="../images/icon_rank_E.svg" width="40" height="40">
        </label>
        </div>

        <div class="text">依頼の詳細を入力するアリ</div>
        <textarea type="comment" id="request-detail" name="detail" class="form-request-detail"></textarea>

        <input type="hidden" name="MAX_FILE_SIZE" value="4000000">
        <input type="file" id="request-picture" name="picture" class="request-picture-default">
        <label for="request-picture" name="request-picture">
            <img src="../images/add_picture.svg" width="250" class="request-picture">
        </label>
        <button type="submit" class="form-request-submit" id="request-submit">
            <img src="../images/send_request.svg" width="250">
        </button>
    </form>
</body>
</html>