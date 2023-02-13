<?php

class Leverancier {
    private $id = -1;
    private $db;
    public $levNaam, $levContact, $levEmail, $levAdres, $levPostcode, $levWoonplaats;

    public function __construct($db) {
        $this->db=$db;
    }

    public function Update() {
        if ($this->id == -1) {
            //Nog niet in de database

        } else {
            //al in de database, dus update
        }
    }
}