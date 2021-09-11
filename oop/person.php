<?php 

    class Person {
        public  $firstName = "Farid Ahmad";
        public $lastName = "Fadhilah";

        public function setFullName($firstName, $lastName){
            $name =  $this->firstName = $firstName;
            $name .= $this->lastName = $lastName;
            return $name;
        }

        public function getFullName(){
            $fullName = "{$this->firstName} {$this->lastName}";
            return $fullName;
        }
    }

    $person = new Person;
    $person->setFullName('Farid', 'Ahmad');
    echo "My Name is <b>".$person->getFullName()."</b>";
    
