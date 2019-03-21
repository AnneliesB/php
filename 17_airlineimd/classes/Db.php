<?php

    abstract class Db{
        private static $conn;

        public static function getInstance(){
            if(self::$conn != null){
                // connection fount, return connection
                echo "🌚";
                return self::$conn;

            } else {
                $config = parse_ini_file("config/config.ini");
                // no connection yet
                self::$conn = new PDO("mysql:host=localhost;dbname=".$config['db_name'], $config['db_user'], $config['db_password']);
                echo "🐡";
            }

        }
    }