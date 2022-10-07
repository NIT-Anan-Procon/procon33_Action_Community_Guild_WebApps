<?php
    //JS側で処理するので拡張子確認は省く
    class File{
        
        function __construct(){

        }

        function uploadImage($img){

            $path;
            $file_name = time().'.'.pathinfo($img['name'],PATHINFO_EXTENSION);
            
            $uploaddir = '/var/www/html/uploads/';
            $upload = $uploaddir.$file_name;

            $pathdir = '/uploads/';
            $path = $pathdir.$file_name;

            move_uploaded_file($img['tmp_name'],$upload);

            return $path;
        }

        function uploadMovie($movie){

            $path;
            $file_name = time().'.'.pathinfo($movie['name'],PATHINFO_EXTENSION);

            $uploaddir = '/var/www/html/uploads/';
            $upload = $uploaddir.$file_name;

            $pathdir = '/uploads/';
            $path = $pathdir.$file_name;

            move_uploaded_file($movie['tmp_name'],$upload);

            var_dump($path);
            return $path;
        }
    }
?>