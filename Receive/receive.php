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
<body onload="getRequestInfoForReceive();">
    <div id="request-info"></div>

    <form action="test.html" method="post" enctype="multipart/form-data" >
        <input type="file" name="test"><br>
        <input type="submit" value="upload">
    </form>
</body>
</html>