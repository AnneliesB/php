<?php 
    class Student{
        private $firstname;

        public function setFirstname($p_sFirstname){
            if(empty($p_sFirstname)){
                throw new Exception("Firstname cannot be empty. :)");
            }
            $this->firstname = $p_sFirstname;
            /* return $this; 
            geeft heel het object terug mee wat handig is voor chainen
            */
        }

        public function getFirstname(){
            return $this->firstname;
        }
        
        /* public function __construct($p_sFirstname){
            // $p = parameter
            // s = string
            if(empty($p_sFirstname)){
                echo "new phone who dis";
            } else {
            $this->firstname = $p_sFirstname;
            echo "hello " . $this->firstname . " my old friend";
            }
        } 
        
        constructor kan, maar is niet handig omdat we maar 1 ding per 
        functie willen doen en een constructor zou verschillende soorten data
        moeten controleren
        */
    }

    $student1 = new Student();
    $student1->setFirstname("joske");
    echo $student1->getFirstname();


   /*  $student1->firstname = "chareltje";
    echo $student1->firstname;
    $student2 = new Student(); */
?>