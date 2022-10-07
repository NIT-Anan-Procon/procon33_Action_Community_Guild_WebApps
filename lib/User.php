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
                $stmt = $this->dbh->prepare($sql);
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

        function getUserID(){
            $sql = "SELECT LAST_INSERT_ID();";

            try{
                $stmt = $this->dbh->prepare($sql);
                $res = $stmt->execute();
                if($res){
                    $data = $stmt->fetch();
                    
                    return $data;
                }
            }catch(PDOException $e){
                header('Error:'.$e->getMessage());
                echo $e->getMessage();
                exit();
            }
        }

        function getTeamID($user_id){
            $sql = "SELECT team_id FROM users WHERE user_id=:user_id";

            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt -> bindValue(':user_id',$user_id);
                $res = $stmt->execute();
                if($res){
                    $data = $stmt->fetch();
                    return $data[0];
                }
            }catch(PDOException $e){
                header('Error:'.$e->getMessage());
                echo $e->getMessage();
                exit();
            }
            
        }

        function getUserNameList($team_id){
            $sql = "SELECT name,user_id FROM users WHERE team_id=:team_id";
            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue(':team_id',$team_id);

                $res = $stmt -> execute();
                if($res){
                    $data = $stmt->fetchAll();
                    return $data;
                }
            }catch(PDOException $e){
                header('Error:'.$e->getMessage());
                echo $e->getMessage();
                exit();
            }
        }

    }
?>