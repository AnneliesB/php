<?php 

class User{
    private $email;
    private $password;
    private $passwordConfirmation;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($p_sEmail)
    {
        $this->email = $p_sEmail;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($p_sPassword)
    {
        $this->password = $p_sPassword;

        return $this;
    }

    public function getPasswordConfirmation()
    {
        return $this->passwordConfirmation;
    }

    public function setPasswordConfirmation($p_sPasswordConfirmation)
    {
        $this->passwordConfirmation = $p_sPasswordConfirmation;

        return $this;
    }

    /** 
     * @return boolean - true if successful, false if unsuccessful
    */
    public function register(){
        $options = [
			'cost' => 12
		];

		$password = password_hash($this->password, PASSWORD_DEFAULT, $options);
		
		try{
			$conn = new PDO("mysql:host=localhost;dbname=netflix", "root", "root");
			$statement = $conn -> prepare("insert into users (email, password) values(:email, :password)");
			$statement->bindParam(":email" , $this->email);
            $statement->bindParam(":password" , $password);
            // bij het passwoord mag je niet $this-> password ingeven omdat je dan de nietgehashete versie gaat opslaan
            // $password slaat al de gehashete versie op
			$result = $statement->execute();
			return($result);
		} catch (Throwable $t) {
			return false;
		}
    }
}