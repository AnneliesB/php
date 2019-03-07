<?php 

    function canRegister($email, $password1, $password2){

    }

    function isPasswordSecureEnough($password){
        if(strlen($password) < 7){
            return false;
        }
        return true;
    }

    function isEqual($value1, $value2){
        if($value1 != $value2){
            return false;
        }
        return true;
    }


?>