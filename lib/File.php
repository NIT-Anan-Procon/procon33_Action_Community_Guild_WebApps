<?php
    class File{
        
        function __construct(){

        }

        function uploadImage($img){
            
            $uploaddir = '/var/www/html/uploads/';
            $upload = $uploaddir.basename($img['name']);

            //写真ファイルか判断してエラーを出したい

            move_uploaded_file($img['tmp_name'],$upload);

            return $upload;
        }
    }
?>