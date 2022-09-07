<?php
    require './../vendor/autoload.php';
    Dotenv\Dotenv::createImmutable(__DIR__."/../")->load();

    require 'Request.php';

    class Judgement{
        protected $dbh;
        protected $table = 'judgements';

        public function __construct(){
            $dbname = $_ENV["db_name"];
            $password = $_ENV["password"];
            $user_name = $_ENV["db_user"];
            $dsn = "mysql:host=localhost;dbname={$dbname};charset=utf8";

            try {
                $this->dbh = new PDO($dsn, $user_name, $password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ]);
            } catch (PDOException $e) {
                header('Error:'.$e->getMessage());
                
                exit();
            }
        }

        function getNotJudgedRequestID($user_id){
            $sql = "SELECT requests.request_id
                FROM (SELECT * FROM judgements 
                WHERE judgements.user_id = :user_id)
                as userJudgements
                RIGHT OUTER JOIN requests 
                ON userJudgements.request_id = requests.request_id
                WHERE judgement is NULL;
            ";

            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue(':user_id',$user_id);
                $res = $stmt->execute();
                if($res){
                    $data = $stmt->fetch();
                    
                    return $data;
                }
            }
            catch(PDOException $e){
                header('Error:'.$e->getMessage());
                
                exit();
            }


        }

        function getCounts($request_id){
            $data;
            $data[0] = $this->getJudgementCount($request_id,'0');
            $data[1] = $this->getJudgementCount($request_id,'1');
            $data[2] = $this->getJudgementCount($request_id,'2');
            $data[3] = $this->getJudgementCount($request_id,'3');

            
            return $data;
        }

        function getJudgementCount($request_id,$team_id){
            $sql = "SELECT count(judgement='1' or NULL) 
            FROM (
                SELECT judgement
                FROM judgements 
                INNER JOIN users 
                ON judgements.user_id = users.user_id 
                WHERE request_id = :request_id and team_id = :team_id
                ) 
            as requestJudgements;";

            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue(':request_id',$request_id);
                $stmt->bindValue(':team_id',$team_id);
                $res = $stmt->execute();
                if($res){
                    $data = $stmt->fetch();
                    if($data[0] >= 5){
                        $req = new Request();
                        $req->updateRequestCondition($request_id,$team_id,'1');
                    }
                    return $data[0];
                }
            }
            catch(PDOException $e){
                header('Error:'.$e->getMessage());
                
                exit();
            }
        }

        

        function sendJudgement($request_id,$user_id,$judgement){
            $sql = "INSERT INTO {$this->table}(request_id,user_id,judgement)
                VALUES
                    (:request_id,:user_id,:judgement)";
            
            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue(':request_id',$request_id);
                $stmt->bindValue(':user_id',$user_id);
                $stmt->bindValue(':judgement',$judgement);
                $stmt->execute();
            }
            catch(PDOException $e){
                header('Error:'.$e->getMessage());
                
                exit();
            }
        }


    }

?>