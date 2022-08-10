<?php
    class data{
        public $msg;
        public $imgLink;
        public $name;
    
        function __construct($name,$msg,$imgLink){
            $this -> name = $name;
            $this -> msg = $msg;
            $this -> imgLink = '"'.$imgLink.'"';
        }
    
    }

    $dataList = array(
        new data("太郎","太郎です。","./images/a.png"),
        new data("次郎","次郎です。","images/a.png"),
        new data("三郎","三郎です。","images/a.png")
    )
?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
        <title></title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <?php
            foreach($dataList as $dt){
                echo '<form action="movie.html" method="post"><button type="submit">';
                echo "$dt->name<br>";
                echo "$dt->msg";
                echo '</button></form>';
                echo "\n";
                
                
                /*<form action="movie.html" method="post">

                <button type="submit" value="押してね">ぼたん</button>
                </form>
                */
            }
        ?>
    </body>
</html>