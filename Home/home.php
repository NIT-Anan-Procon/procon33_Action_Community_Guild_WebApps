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
            
            foreach($data as $value){
                $name = $value[0];
                $user_id = $value[1];
                $request_id = -1;
               
                $request_id = $Request->getRequestByUser($user_id);
                if($request_id == NULL)continue;

                //ToDo:アントの色を巣ごとに変更
                $antColor = "53C5DE";
            ?>
            <div class="member">
                <button type="submit" class="situation" name="request_id" value="<?php echo $request_id?>">
                    <img src="../images/example.svg" width="100">
                </button>
                <div class="ant">
                    <svg width="100" viewBox="0 0 143 66" fill="<?php echo $antColor;?>" xmlns="http://www.w3.org/2000/svg">
                        <path d="M138.395 27.4921C143.57 23.9259 143.589 16.2885 138.432 12.6965L122.545 1.63044C116.587 -2.51993 108.419 1.73158 108.401 8.99302L108.346 31.0456C108.328 38.307 116.474 42.5992 122.453 38.4787L138.395 27.4921ZM73.7102 23.9515C76.1402 21.9577 76.1494 18.2427 73.7295 16.2367L63.9052 8.0932C60.6507 5.39547 55.7249 7.70294 55.7143 11.9302L55.6738 28.1681C55.6632 32.3953 60.5774 34.7273 63.8454 32.0459L73.7102 23.9515ZM80.2825 14.2658C76.2577 17.0396 76.2428 22.9797 80.2538 25.7736L95.4209 36.3382C100.055 39.5663 106.408 36.2596 106.422 30.6118L106.474 9.55833C106.488 3.91055 100.153 0.572151 95.5022 3.77703L80.2825 14.2658ZM26.777 36.4734C29.6746 37.2415 32.5253 38.197 32.4829 39.4965C32.3891 42.368 29.4224 42.6181 27.1339 42.5433C24.8453 42.4684 23.0907 41.4106 18.1465 37.9172C16.9372 37.0627 16.0301 36.3522 15.4245 35.7817L3.85376 27.7169C-1.30022 24.1246 -1.28117 16.4908 3.89068 12.9243L19.8187 1.94041C24.8262 -1.51277 31.3557 0.936884 33.3344 6.09083L39.3531 1.94041C45.3319 -2.18261 53.4805 2.10935 53.4624 9.37201L53.4073 31.4193C53.3892 38.6819 45.2194 42.9331 39.2611 38.7803L23.3882 27.7169C18.2342 24.1246 18.2532 16.4908 23.4251 12.9243L29.857 8.48885C29.2701 4.99784 25.1636 3.11345 22.0895 5.23335L6.16149 16.2172C3.28824 18.1986 3.27766 22.4396 6.14098 24.4354L19.9546 34.0634C22.963 35.3246 25.4195 36.0917 26.5138 36.2721C26.6171 36.343 26.7043 36.41 26.777 36.4734ZM51.7386 59.2583C51.4879 59.6039 51.1332 59.8602 50.7265 59.9897L32.7425 65.7163C30.576 66.4062 29.1213 63.5214 30.9642 62.1896L60.0297 41.185C61.8726 39.8532 64.1551 42.1398 62.8201 43.9803L51.7386 59.2583ZM80.8461 47.372C81.0224 46.9832 81.0697 46.5481 80.981 46.1305L77.0593 27.6687C76.5868 25.4446 73.3601 25.6079 73.1146 27.8683L69.2425 63.5195C68.997 65.7799 72.1134 66.6321 73.0523 64.5613L80.8461 47.372ZM107.976 47.0148C108.386 47.1331 108.748 47.3796 109.008 47.7181L120.504 62.6861C121.889 64.4893 119.671 66.8377 117.792 65.557L88.1606 45.3582C86.2819 44.0775 87.6568 41.1538 89.8414 41.784L107.976 47.0148ZM37.7801 23.552C33.3268 22.4183 32.6318 19.714 33.5677 16.0328C34.5037 12.3515 42.4629 8.95918 46.9162 10.0929C49.7979 10.8266 48.6108 12.583 47.1604 14.7288C46.3694 15.899 45.5002 17.185 45.1699 18.4841C44.234 22.1654 42.2333 24.6858 37.7801 23.552Z"/>
                    </svg>
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