<?php
    class Person
    {
        private $name;
        private $city;

        public function __construct(string $name, string $city)
        {
            $this->name =$name;
            $this->city = $city;
           
        }
        public function getName(): string
        {
            return $this->name;
        }

        public function getCity():string
        {
          return $this->city;
        }

        public function Wyswietl()
        {
            echo "Nazwisko: " . $this->getName() . ", miasto: " . $this->getCity() . ".";
        }
        


    }


    $person1 = new Person('Kowalski','Warszawa');
    $person1->Wyswietl();
    

?>