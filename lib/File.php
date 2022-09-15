<?php
    class File{
        
        function __construct(){

        }

        function uploadImage($img){
            $path;
            
            $uploaddir = '/var/www/html/uploads/';
            $upload = $uploaddir.basename($img['name']);

            $pathdir = '/uploads/';
            $path = $pathdir.basename($img['name']);

            //写真ファイルか判断してエラーを出したい

            move_uploaded_file($img['tmp_name'],$upload);

            return $upload;
        }
    }
?>