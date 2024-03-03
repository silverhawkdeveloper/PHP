<?php

class Db {

    private static $instance = NULL;
    
    public static function getConnect() {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=formula1', 'dwes', 'dwes', $pdo_options);
        }
        return self::$instance;
    }

}

?>