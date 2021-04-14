<?php

class fiets {

    public $maxVersnellingen = 6;

    public function bellen() {

    }

    public function fietsen() {

    }
    
}

class Personenauto {

    public $kenteken = '62esaas2';
    public $kleur = 'rood';
    public $maxLaadcapaciteit = 60; // in KG
    public $deuren = 4;
    public $maxVersnellingen = 6;


    public function rijden() {
        
    }

    public function claxxoneren() {

    }
    
}

class Vrachtwagen {

    public $kenteken = '42ejjas2';
    public $maxLaadcapaciteit = 1000; // in Kilo Gram
    public $maxVersnellingen = 6;
    public $lengte = 14.50; // in Meters
    public $achteruitrijSensoren = true;


    public function rijden() {
        
    }

    public function claxxoneren() {

    }
    
}

class Boot {

    public $maxLaadcapaciteit = 100; // in Kilo Gram
    public $maxSnelheid = 45; // in KM P/U
    public $registratieNr = '3660803';


    public function varen() {
        
    }

}

class Vliegtuig {

    public $registratieNr = '312794121';
    public $maxLaadcapaciteit = 500; // in KG
    public $vliegmaatschappij = 'Emirates';

}


?>