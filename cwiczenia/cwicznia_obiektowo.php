<?php

    

    class Roslina{
        public $gatunek;
        public $wystepowanie;
        public $srodowisko;

    public function Opis(){
        echo "</br> </br>Ta roślina to " . $this->gatunek . " i występuje na terenie " . $this->wystepowanie . ".";
    }

    public function Wysokosc($cm){
        $this ->cm = $cm;
        
        echo "</br>Maksymalna wysokość tej rośliny to ". $cm . "cm.";

        }

    public function wzrost($czas, $centymetrNaDzien){
            $this->czas = $czas; 
            $this->centymetrNaDzien = $centymetrNaDzien;
        if($czas > 0){
            $wzrost = $czas * $centymetrNaDzien;
            $this ->wzrost = $wzrost;
           
        
          
                    }
        
        }
         public function Pokaz(){
            echo "</br> " . $this->gatunek . " urośnie w przeciągu " . $this->czas . " dni aż " . $this->wzrost . "cm.";
         }
    }

    


    $klon = new Roslina();
        $klon->gatunek = "Klon";
        $klon -> wystepowanie = "Europa";

        
        $klon->Opis();
        
        $klon->Wysokosc(500);

        echo $klon->wzrost(10, 2);
        $klon->Pokaz();
       
    $buk = new Roslina();
        $buk->gatunek = "Buk";
        $buk->wystepowanie = "Europa";
        $buk->Opis();
        $buk->Wysokosc(1500);
        

?>

<?php





?>