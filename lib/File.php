<?php
    class File{
        
        function __construct(){

        }

        function __uploadImage($img){
            $path;

            $uploaddir = 'var/www/html/uploads';
            $upload = $uploaddir.basename($img['name']);
            move_uploaded_file($img['tmp'],$upload);
            
            return $path;
        }
    }
?>