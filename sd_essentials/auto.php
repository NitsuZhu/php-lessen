<?php

class auto {
    public $merk;
    public $kleur;
    public $bouwjaar;

        public function __construct($merk, $kleur, $bouwjaar){
            $this->merk = $merk;
            $this->kleur = $kleur;
            $this->bouwjaar = $bouwjaar;
        }
}