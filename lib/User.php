<?php
    require './../vendor/autoload.php';
    Dotenv\Dotenv::createImmutable(__DIR__."/../")->load();

    class User{
        protected $dbh;
        protected $table = 'users';

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

        function sendUser($name,$team_id){

            $sql = "INSERT INTO {$this->table}(name,team_id,password)
                VALUES
                    (:name,:team_id,:password);
            ";

            try{
                $stmt = $this->dbh->prepare($sql);-
                $stmt->bindValue(':name',$name);
                $stmt->bindValue(':team_id',$team_id);
                $stmt->bindValue(':password',"1111");
                $stmt->execute();
            }
            catch(PDOException $e){
                header('Error:'.$e->getMessage());
                echo $e->getMessage();
                exit();
            }
        }
    }
?>