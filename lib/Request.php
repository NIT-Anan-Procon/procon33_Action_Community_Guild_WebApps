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
    }
?>