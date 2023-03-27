<?php
include_once 'includes/classes/dbh.php';

class Leverancier extends Dbh {


    function setLevId($idInput, $levID) {
        // maakt de sql code klaar om de levID in de database the inserten
        $sql = "UPDATE leveranciers SET levID =? WHERE levID = ?";
        $stmt = $this->connect()->prepare($sql);

        // doet de execute en checkt of de execute is goed gegaan en console logged of het wel of niet goed is gegaan
        $stmt->execute([$idInput, $levID]);
        if ($stmt->execute()) {
            echo "<script>console.log('nieuw levId toegevoegt aan de database')</script>";
        } else {
            echo "<script>console.log('nieuw levId kon niet worden toegevoegt aan de database')</script>";
        }
    }

    function getAllLevId() {
       // prepares de SQL code
        $sql = "SELECT * FROM leveranciers";
        $stmst = $this->connect()->query($sql);
        // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
        while ($row = $stmst->fetch()) {
            echo $row['levID'] . '<br>';
        }
    }

    function getAllLevNaam() {
        // prepares de SQL code
        $sql = "SELECT * FROM leveranciers";
        $stmst = $this->connect()->query($sql);
        // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
        while ($row = $stmst->fetch()) {
            echo $row['levNaam'] . '<br>';
        }
    }

    function getAllLevContact() {
        // prepares de SQL code
        $sql = "SELECT * FROM leveranciers";
        $stmst = $this->connect()->query($sql);
        // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
        while ($row = $stmst->fetch()) {
            echo $row['levContact'] . '<br>';
        }
    }

    function getAllLevEmail() {
        // prepares de SQL code
        $sql = "SELECT * FROM leveranciers";
        $stmst = $this->connect()->query($sql);
        // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
        while ($row = $stmst->fetch()) {
            echo $row['levEmail'] . '<br>';
        }
    }

    function getAllLevAdres() {
        // prepares de SQL code
        $sql = "SELECT * FROM leveranciers";
        $stmst = $this->connect()->query($sql);
        // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
        while ($row = $stmst->fetch()) {
            echo $row['levAdres'] . '<br>';
        }
    }

    function getAllLevPostcode() {
        // prepares de SQL code
        $sql = "SELECT * FROM leveranciers";
        $stmst = $this->connect()->query($sql);
        // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
        while ($row = $stmst->fetch()) {
            echo $row['levPostcode'] . '<br>';
        }
    }

    function getAllLevWoonplaats() {
        // prepares de SQL code
        $sql = "SELECT * FROM leveranciers";
        $stmst = $this->connect()->query($sql);
        // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
        while ($row = $stmst->fetch()) {
            echo $row['levWoonplaats'] . '<br>';
        }
    }


}
