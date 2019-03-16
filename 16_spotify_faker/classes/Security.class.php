<?php

class Security{
    public static function hash($password){
        $options = [
            'cost' => 15
        ];

        $hash = password_hash($password, PASSWORD_DEFAULT, $options);
        return $hash;
    }
}