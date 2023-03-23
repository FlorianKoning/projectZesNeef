<?php
include_once 'includes/classes/dbh.php';

class Leverancier extends Dbh {

     // reads alle omschrijvingen van de artikelen
     public function getAllInfo($x) {
        if ($x == "naam" || $x == "levNaam" || $x == "Naam" || $x == "levnaam") {
            $sql = "SELECT * FROM leveranciers";
            $stmst = $this->connect()->query($sql);
            // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
            while ($row = $stmst->fetch()) {
                echo $row['levNaam'] . '<br>';
            }
        } else if ($x == "contact" || $x == "Contact" || $x == "levcontact" || $x == "levConctact") {
            $sql = "SELECT * FROM leveranciers";
            $stmst = $this->connect()->query($sql);
            // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
            while ($row = $stmst->fetch()) {
                echo $row['levContact'] . '<br>';
            }
        } else if ($x == "email" || $x == "Email" || $x == "levemail" || $x == "levEmail") {
            $sql = "SELECT * FROM leveranciers";
            $stmst = $this->connect()->query($sql);
            // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
            while ($row = $stmst->fetch()) {
                echo $row['levEmail'] . '<br>';
            }
        } else if ($x == "adres" || $x == "Adres" || $x == "levadres" || $x == "levAdres") {
            $sql = "SELECT * FROM leveranciers";
            $stmst = $this->connect()->query($sql);
            // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
            while ($row = $stmst->fetch()) {
                echo $row['levAdres'] . '<br>';
            }
        } else if ($x == "woonplaats" || $x == "Woonplaats" || $x == "levWoonplaats" || $x == "levwoonplaats") {
            $sql = "SELECT * FROM leveranciers";
            $stmst = $this->connect()->query($sql);
             // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
             while ($row = $stmst->fetch()) {
                echo $row['levWoonplaats'] . '<br>';
            }
        }
    }

    // dit pakt de info bij ID
    public function getAllInfoWithID($x, $ID) {
        if ($x == "naam" || $x == "levNaam" || $x == "Naam" || $x == "levnaam") {
            // hier ook gewoon fetch voor de zelfde reden
            $sql = "SELECT * FROM artikelen WHERE artId = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ID]);
            $ids = $stmt->fetchAll();

            foreach($ids as $id) {
                echo $id['levNaam'] . '<br>';
            }
        } else if ($x == "contact" || $x == "Contact" || $x == "levcontact" || $x == "levConctact") {
            // hier ook gewoon fetch voor de zelfde reden
            $sql = "SELECT * FROM artikelen WHERE artId = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ID]);
            $ids = $stmt->fetchAll();

            foreach($ids as $id) {
                echo $id['levConctact'] . '<br>';
            }
        } else if ($x == "email" || $x == "Email" || $x == "levemail" || $x == "levEmail") {
            // hier ook gewoon fetch voor de zelfde reden
            $sql = "SELECT * FROM artikelen WHERE artId = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$ID]);
            $ids = $stmt->fetchAll();

            foreach($ids as $id) {
                echo $id['levEmail'] . '<br>';
            }
        } else if ($x == "adres" || $x == "Adres" || $x == "levadres" || $x == "levAdres") {
           // hier ook gewoon fetch voor de zelfde reden
           $sql = "SELECT * FROM artikelen WHERE artId = ?";
           $stmt = $this->connect()->prepare($sql);
           $stmt->execute([$ID]);
           $ids = $stmt->fetchAll();

           foreach($ids as $id) {
               echo $id['levAdres'] . '<br>';
           }
        } else if ($x == "woonplaats" || $x == "Woonplaats" || $x == "levWoonplaats" || $x == "levwoonplaats") {
            // hier ook gewoon fetch voor de zelfde reden
           $sql = "SELECT * FROM artikelen WHERE artId = ?";
           $stmt = $this->connect()->prepare($sql);
           $stmt->execute([$ID]);
           $ids = $stmt->fetchAll();

           foreach($ids as $id) {
               echo $id['levWoonplaats  '] . '<br>';
           }
        }
    }

    public function deleteLeverancier($levID) {
        // SLQ code voor de delete
        $sql = "DELETE FROM leveranciers WHERE levID = ?";
        $stmt = $this->connect()->prepare($sql);

        // executes de sql code in de database en checkt of het goed is gegaan of niet
        $stmt->execute([$levID]);
        if ($stmt->execute()) {
            echo "<script>console.log('artikel has been deleted.')</script>";
        } else {
            echo "<script>console.log('Er is iets fout gegaan, kon niet de artikel deleten.')</script>";
        }
    }



}
