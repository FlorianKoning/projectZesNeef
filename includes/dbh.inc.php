<?php

class Dbh {
    private $dbConnectie;
    public function __construct($IP, $username, $password, $DBName) {
        try {
            $this->dbConnectie = new PDO("mysql:host =". $IP .";dbname=". $DBName, $username, $password);
        } catch (PDOException $e) {
            die("Error!: ". $e->getMessage());
        }
    }

    public function SQLCommando($sqlCommando, $values) {
        $query = $this->dbConnectie->prepare($sqlCommando);
        $query->execute($values);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}