<?php

namespace App\Model;

class Conexao{

    private static $instance;
    


    static function getConn(){
        
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=sistema-crud-php;charset=utf8','root','');
        }
            return self::$instance;
    }
} 