<?php

class Dbh
{
    // variabelen
    private $dbConnectie;
    private $IP;
    private $DBName;
    private $userName;
    private $password;

    public function connect()
    {
        // alle variabelen die nodig zijn om met de database te verbinden
        $this->IP = "localhost";
        $this->DBName = "bas_database";
        $this->userName = "root";
        $this->password = "";

        // maakt de connectie met de database en geeft alert box wanneer er iets fout gaat
        try {
            // verbind met de database
            $this->dbConnectie = new PDO("mysql:host =" . $this->IP . ";dbname=" . $this->DBName, $this->userName, $this->password);
            $this->dbConnectie->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Database Connected.<br>";
            return $this->dbConnectie;
        } catch (PDOException $e) {
            // maakt de alert box
            die("<script>alert('Er is iets fout gegaan met de database.')</script>" . $e->getMessage());
        }
    }

    // ben vergeten wat dit deet lol
    public function SQLCommando($sqlCommando, $values)
    {
        $query = $this->dbConnectie->prepare($sqlCommando);
        $query->execute($values);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
