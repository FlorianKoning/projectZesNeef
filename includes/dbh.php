<?php

class Dbh
{
    // variabelen
    private $dbConnectie;

    public function __construct()
    {
        $IP = "localhost";
        $DBName = "bas_database";
        $userName = "root";
        $password = "";
        try {
            $this->dbConnectie = new PDO("mysql:host =" . $IP . ";dbname=" . $DBName, $userName, $password);
        } catch (PDOException $e) {
            die("Maat de pauper database werkt niet meer!:<br>" . $e->getMessage());
        }
    }

    public function SQLCommando($sqlCommando, $values)
    {
        $query = $this->dbConnectie->prepare($sqlCommando);
        $query->execute($values);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
