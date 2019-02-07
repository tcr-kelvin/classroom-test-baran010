<?php

///////////////////////////////////////////// autobedrijf
class autobedrijf {
    public $naam;
    public $adres;
    public $totaalwerknemers;
    public $totaalautos;
    public $inkoopwaarde;
    public $verkoopwaarde;

    /**
     * autobedrijf constructor.
     * @param $naam
     * @param $adres
     * @param $totaalwerknemers
     * @param $totaalautos
     * @param $inkoopwaarde
     * @param $verkoopwaarde
     */
    public function __construct($naam, $adres, $totaalwerknemers, $totaalautos, $inkoopwaarde, $verkoopwaarde)
    {
        $this->naam = $naam;
        $this->adres = $adres;
        $this->totaalwerknemers = $totaalwerknemers;
        $this->totaalautos = $totaalautos;
        $this->inkoopwaarde = $inkoopwaarde;
        $this->verkoopwaarde = $verkoopwaarde;
    }


}

///////////////////////////////////////////// auto
class auto {
    public $merk;
    public $model;
    public $bouwjaar;
    public $topsnelheid;
    public $kilometerstand;
    public $kenteken;
    public $transmissie;
    public $brandstof;
    public $vermogen;
    public $verbruik;
    public $motorinhoud;
    public $apkvervaldatum;

    /**
     * auto constructor.
     * @param $merk
     * @param $model
     * @param $bouwjaar
     * @param $topsnelheid
     * @param $kilometerstand
     * @param $kenteken
     * @param $transmissie
     * @param $brandstof
     * @param $vermogen
     * @param $verbruik
     * @param $motorinhoud
     * @param $apkvervaldatum
     */
    public function __construct($merk, $model, $bouwjaar, $topsnelheid, $kilometerstand, $kenteken, $transmissie, $brandstof, $vermogen, $verbruik, $motorinhoud, $apkvervaldatum)
    {
        $this->merk = $merk;
        $this->model = $model;
        $this->bouwjaar = $bouwjaar;
        $this->topsnelheid = $topsnelheid;
        $this->kilometerstand = $kilometerstand;
        $this->kenteken = $kenteken;
        $this->transmissie = $transmissie;
        $this->brandstof = $brandstof;
        $this->vermogen = $vermogen;
        $this->verbruik = $verbruik;
        $this->motorinhoud = $motorinhoud;
        $this->apkvervaldatum = $apkvervaldatum;
    }


}

///////////////////////////////////////////// klant
class klant {
    public $klantnaam;
    public $adres;
    public $woonplaats;
    public $telefoonnummer;

    /**
     * klant constructor.
     * @param $klantnaam
     * @param $adres
     * @param $woonplaats
     * @param $telefoonnummer
     */
    public function __construct($klantnaam, $adres, $woonplaats, $telefoonnummer)
    {
        $this->klantnaam = $klantnaam;
        $this->adres = $adres;
        $this->woonplaats = $woonplaats;
        $this->telefoonnummer = $telefoonnummer;
    }


}

$klant1 = new klant("Jan", "Schiedamseweg", "Rotterdam", "0612345678");

echo $klant1->klantnaam, " ", $klant1->adres, " ", $klant1->woonplaats, " ", $klant1->telefoonnummer;