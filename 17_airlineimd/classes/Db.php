<?php

    abstract class Db{
        private static $conn;

        public static function getInstance(){
            if(self::$conn != null){
                // connection fount, return connection
                echo "🌚";
                return self::$conn;

            } else {
                // no connection yet
                self::$conn = new PDO("mysql:host=localhost;dbname=airline", "root", "root");
                echo "🐡";
            }

        }
    }