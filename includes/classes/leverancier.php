<?php
include_once 'includes/classes/dbh.php';

class Leverancier extends Dbh {
    function setLevId($idInput) {
        // maakt de sql code klaar om de levID in de database the inserten
        $sql = "INSERT INTO leveranciers(levID) VALUES (?)";
        $stmt = $this->connect()->prepare($sql);

        // doet de execute en checkt of de execute is goed gegaan en console logged of het wel of niet goed is gegaan
        $stmt->execute([$idInput]);
        if ($stmt->execute()) {
            echo "<script>console.log('nieuw levId toegevoegt aan de database')</script>";
        } else {
            echo "<script>console.log('nieuw levId kon niet worden toegevoegt aan de database')</script>";
        }
    }



}
