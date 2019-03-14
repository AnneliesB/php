<?php 
    class Student{
        private $firstname;
/**
         * Get the value of firstname
         */ 
        public function getFirstname()
        {
                return $this->firstname;
        }

        /**
         * Set the value of firstname
         *
         * @return  self
         */ 
        public function setFirstname($firstname)
        {
                $this->firstname = $firstname;

                return $this;
        }
        
        

        
        
    }

    try{
        $student1 = new Student();
        $student1->setFirstname("joske");
        // hier spreekt deze de functie aan waar de exception is gedeclareerd
        echo $student1->getFirstname();
    }
    catch(Throwable $t){
        echo $t->getMessage();
        // hier gaan we dan de link vinden naar de exception error message

        
    }

?>