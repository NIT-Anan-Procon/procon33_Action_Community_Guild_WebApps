<?php
    require './../vendor/autoload.php';
    Dotenv\Dotenv::createImmutable(__DIR__."/../")->load();

    class Request{
        protected $dbh;
        protected $table = 'requests';

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

        function sendRequest($user_id,$request_name,$detail,$rank){

            $sql = "INSERT INTO {$this->table}(user_id,request_name,detail,rank,image_path)
                VALUES
                    (:user_id,:request_name,:detail,:rank,:image_path);
            ";

            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue(':user_id',$user_id);
                $stmt->bindValue(':request_name',$request_name);
                $stmt->bindValue(':detail',$detail);
                $stmt->bindValue(':rank',$rank);
                $stmt->bindValue(':image_path', "");
                $stmt->execute();
            }
            catch(PDOException $e){
                header('Error:'.$e->getMessage());

                exit();
            }
        }

        function getRequest($request_id){
            $sql = "SELECT request_name,detail,rank,image_path,name
            FROM requests INNER JOIN users ON requests.user_id = users.user_id
            WHERE request_id = :request_id;";

            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue(':request_id',$request_id);
                $res = $stmt->execute();
                if($res){
                    $data = $stmt->fetch();
                    
                    return $data;
                }
            }catch(Exception $e){
                header('Error:'.$e->getMessage());

                exit();
            }
        }
        
        function updateRequestCondition($request_id,$team_id,$condition){
            $sql;
            if($team_id == 0){
                $sql = "UPDATE {$this->table} SET condition_0 = :condition WHERE request_id = :request_id";
            }
            if($team_id == 1){
                $sql = "UPDATE {$this->table} SET condition_1 = :condition WHERE request_id = :request_id";
            }
            if($team_id == 2){
                $sql = "UPDATE {$this->table} SET condition_2 = :condition WHERE request_id = :request_id";

            }
            if($team_id == 3){
                $sql = "UPDATE {$this->table} SET condition_3 = :condition WHERE request_id = :request_id";
            }

            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue(':condition',$condition);
                $stmt->bindValue(':request_id',$request_id);
                $stmt->execute();
            }
            catch(PDOException $e){
                header('Error:'.$e->getMessage());

                exit();
            }
        }
    }
?>
