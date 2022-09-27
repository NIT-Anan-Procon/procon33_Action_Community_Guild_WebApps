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
        require_once __DIR__."/../lib/Request.php";

        $user = new User();
        $Request = new Request();

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
            <?php
                $team;
                if($team_id==0)$team = "passione";
                if($team_id==1)$team = "sulserio";
                if($team_id==2)$team = "musica";
                if($team_id==3)$team = "sorpresa";

                echo '<img src="../images/'.$team.'.svg" width="250">';
            ?> 
        </button>
    </div>

    

    <form id="members" action="../Receive/receive.php" method="post">
        
        <?php
            $antImage = "ant_first.svg";
            
            foreach($data as $value){
                $name = $value[0];
                $user_id = $value[1];
                $request_id = -1;
               
                $request_id = $Request->getRequestByUser($user_id);
                if($request_id == NULL)continue;
            ?>
            <div class="member">
                <button type="submit" class="situation" name="request_id" value="<?php echo $request_id?>">
                    <img src="../images/example.svg" width="100">
                </button>
                <div class="ant">
                    <img src="../images/<?php echo "$antImage"?>"width="100">
                </div>
                <div class="name">
                    <?php echo $name?>
                </div>
            </div>
            <?php
            }
        ?>
    </div>
    
</body>
</html>