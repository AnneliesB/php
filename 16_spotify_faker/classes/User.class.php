<?php

class User{
    private $email;
    private $password;
    private $passwordConfirmation;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($p_sEmail){
        $this->email = $p_sEmail;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($p_sPassword){
        $this->password = $p_sPassword;
        return $this;
    }

    public function getPasswordConfirmation(){
        return $this->passwordConfirmation;
    }

    public function setPasswordConfirmation($p_sPasswordConfirmation){
        $this->passwordConfirmation = $p_sPasswordConfirmation;
        return $this;
    }

    public function register(){
        $password = Security::hash($this->password);

        try{
            $conn = new PDO("mysql:host=localhost;dbname=spotify", "root", "root");
            $statement = $conn-> prepare("insert into users (email, password) values(:email, :password)");
            $statement->bindParam(":email" , $this->email);
            $statement->bindParam(":password" , $password);
            $result = $statement->execute();
            return($result);
        } catch (Throwable $t) {
            return false;
        }
    }

    



}