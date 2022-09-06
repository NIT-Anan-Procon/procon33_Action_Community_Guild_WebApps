<script>
    let user = {
        team : 0
    }

    let members = [
    ]
</script>

<?php 
        
        ini_set('display_errors', 1);
        require_once __DIR__."/../lib/User.php";

        $user = new User();

        $user_id = $_COOKIE["user_ID"];
        $team_id = $user->getTeamID($user_id);
        
        $data = $user->getUserNameList($team_id);
        $json_array = json_encode($data);
        
    ?>
    <script>
        user['team'] =<?php echo $team_id; ?>;
        let json_array = <?php echo $json_array; ?>;
        
        console.log(json_array);
        for(var element in json_array){
            console.log(element+":"+json_array[element]["0"]);
            let member = {
                situationImage:"example.svg",
                antImage:"ant_first.svg",
                author:json_array[element]["0"]
            }
            members.push(member);
            
        }

    </script>
<!--authorは8文字に限定しようと思うポケモンみたいに-->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../stylesheets/home.css">
    <script src = "../scripts/getRequest.js" type="text/javascript" charset="shift_jis"></script>
    <title>home page</title>
</head>
<body onload="getMembers();">
    <div>
        <button  class="power-map" onclick="location.href='../Home/power_map.php'">
            <img src="../images/power_map.svg" width="250">
        </button>
    </div>
    <div>
        <button  class="team" id="team" onclick="location.href='../Home/home.php'">
            <img src="../images/passione.svg" width="250">   
        </button>
    </div>

    

    <div id="members">
        <div class="member">
            <button class="situation">
                <img src="../images/example.svg" width="100" onclick="location.href='../Receive/receive.php'">
            </button>
            <div class="ant">
                <img src="../images/ant_first.svg" width="100">
            </div>
            <div class="name">
                これ見えてるならjsが動いてないよ
            </div>
        </div>
    </div>
    
</body>
</html>