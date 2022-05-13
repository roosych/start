<?php


namespace App;

use PDO;

class Connection {

    public static function make(){
        return new PDO('mysql:host=127.0.0.1;dbname=marlin_learn;charset=utf8', 'root', '');
    }
}