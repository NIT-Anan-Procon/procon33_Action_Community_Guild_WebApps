<?php
    require './../vendor/autoload.php';
    Dotenv\Dotenv::createImmutable(__DIR__."/../")->load();

    class Movie{
        protected $dbh;
        protected $table = 'movies';

        function __construct(){
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

        function getCounts($request_id){
            $counts = array();
            for($team_id = 0;$team_id<4;$team_id++){
                array_push($counts,$this->countMovie($request_id,$team_id));
            }
            return $counts;
        }

        function countMovie($request_id,$team_id){
            $sql = "SELECT count(request_id) 
            FROM movies INNER JOIN users ON movies.user_id = users.user_id
            WHERE request_id = :request_id and team_id = :team_id";

            try{
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue(':request_id',$request_id);
                $stmt->bindValue(':team_id',$team_id);
                $stmt->execute();
                $data = $stmt->fetch();
                return $data[0];
            }
            catch(PDOException $e){
                header('Error:'.$e->getMessage());
            }
        }
    }
?>