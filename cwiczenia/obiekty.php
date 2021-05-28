<?php
 
    class Narodowosc {
        public $nazwa;
        public $ludnosc;
        public $kontynent;

        public function informacje($nazwa){
      //      echo "Społeczeństwo kraju " . $this->nazwa; //. " posiada " . $this->ludnosc . "ludność. " . $this->nazwa . " znajduje się w " . $this->kontynent;
        }
    }

    $polska = new Narodowosc("Polska");
   // $polska->informacje($nazwa);



?>

<?php
 
    class Person{
        private $name = "Jan Nowak";
        private $city = "Kraków";

        public function getName(){
            return $this->name;
        }
        public function getCity(){
            return $this->city;
        }
    }
    $p1 = new Person;
    echo $p1->getName();
    echo $p1->getCity();

?>