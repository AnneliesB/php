<?php
    include_once('Db.class.php');
    
    class User {
        private $email;
        private $password;
        private $db;


        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
            if( empty($email) ){
                throw new Exception("Email cannot be empty.");
            }

            // todo: valid email ? -> filter_var()

            $this->email = $email;
            return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }


        /*
            Registers a user into the database
            @return true if successful
            @return false if unsuccessful
        */
        public function register() {
            // connectie
            $conn = Db::getInstance();

            // query (sql injectie!!!)
            $statement = $conn->prepare("insert into users
                                         (email, password)
                                         values (:email, :password)
                                        ");
            
            $hash = password_hash($this->password, PASSWORD_BCRYPT);

            $statement->bindParam(":email", $this->email);
            $statement->bindParam(":password", $hash);

            // execute
            $result = $statement->execute();
            return $result;
        }

        /*
            Create a user session
            Redirect to the index page
        */
        public function login() {
            if(!isset($_SESSION)) { 
                session_start(); 
            } 
            $_SESSION['username'] = $this->email;
            header('Location: index.php');
        }

        /*
            Check if a user is logged in
            If not, redirect to login
        */
        public static function checkLogin(){
            if(!isset($_SESSION)) { 
                session_start(); 
            }
            if(!isset($_SESSION['username'])){
                header('Location: login.php');
            }
        }

        /*
            Find a user based on email addres
        */
        public static function findByEmail($email){
            $conn = Db::getInstance();
            $statement = $conn->prepare("select * from users where email = :email limit 1");
            $statement->bindValue(":email", $email);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }

        /* Check if a user exists based on a give email address */
        public static function isAccountAvailable($email){
            $u = self::findByEmail($email);
            
            // PDO returns false if no records are found so let's check for that
            if($u == false){
                return true;
            } else {
                return false;
            }
        }

    }