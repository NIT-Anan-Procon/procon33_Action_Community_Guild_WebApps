<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/request.css">
    <title>REQUEST SCREEN</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <p>
            <span class="text">REQUEST NAME</span>
            <input type="text" id="request-name" name="request-name" class="form-request-name">
        </p>
        <p>
            <span class="text">REQUEST RANK</span>
        </p>
        <p>
            <input id="A" type="radio" name="request-rank" class="form-request-rank" value="A" checked="checked">
            <label for="A" class="label-request-rank"><img src="../images/icon_rank_A.svg" width="40" height="40"></label>
            <input id="B" type="radio" name="request-rank" class="form-request-rank" value="B">
            <label for="B" class="label-request-rank"><img src="../images/icon_rank_B.svg" width="40" height="40"></label>
            <input id="C" type="radio" name="request-rank" class="form-request-rank" value="C">
            <label for="C" class="label-request-rank"><img src="../images/icon_rank_C.svg" width="40" height="40"></label>
            <input id="D" type="radio" name="request-rank" class="form-request-rank" value="D">
            <label for="D" class="label-request-rank"><img src="../images/icon_rank_D.svg" width="40" height="40"></label>
            <input id="E" type="radio" name="request-rank" class="form-request-rank" value="E">
            <label for="E" class="label-request-rank"><img src="../images/icon_rank_E.svg" width="40" height="40"></label>
        </p>
        <p>
            <span class="text">DETAIL</span>
            <textarea type="comment" id="request-detail" name="request-detail" class="form-request-detail"></textarea>
        </p>
        <br>
        <p class="label-request-picture">
            <label>
                PICTURE
                <input type="file" id="request-picture" name="request-picture" class="form-request-picture">
            </label>
        </p>
        <p>
            <br><input type="submit" id="request-submit" name="request-submit" class="form-request-submit" value="SUBMIT">
        </p>
    </form>
</body>
</html>