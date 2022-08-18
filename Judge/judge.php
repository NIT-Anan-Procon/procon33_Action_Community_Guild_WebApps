<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ShiftJIS">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/judge.css">
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
    <title>judge page</title>
</head>
<body onload="getRequestInfoForJudge();">
    <div id="request-info"></div>
            
    <div class="judge-buttons">
        <button class="good-button" onclick="location.href='./result.html'">
            <img src="../images/good.svg" alt="good" height="80px">
        </button>
        <div class="counter">
            <div class="count"><img class="count1" src="../images/count_on.svg" alt="count1" width="20px"></div>
            <div class="count"><img class="count2" src="../images/count_off.svg" alt="count2" width="20px"></div>
            <div class="count"><img class="count3" src="../images/count_off.svg" alt="count3" width="20px"></div>
            <div class="count"><img class="count4" src="../images/count_off.svg" alt="count4" width="20px"></div>
            <div class="count"><img class="count5" src="../images/count_off.svg" alt="count5" width="20px"></div>
        </div>
        <button class="bad-button" type="submit" onclick="location.href='./result.html'">
            <img src="../images/bad.svg" alt="bad" width="80px">
        </div>
    </div>
</body>
</html>