<!-- Florian Koning -->

<?php
include_once 'includes/classes/dbh.php';

class Artikelen extends Dbh
{
    public string $artOmschrijving;

    // reads alle omschrijvingen van de artikelen
    public function getOmschrijving()
    {

        $sql = "SELECT * FROM artikelen";
        $stmt = $this->connect()->query($sql);
        // gebruikt hier fetch omdat er toch geen user input is, dus kan er geen SQL injectie komen 
        while ($row = $stmt->fetch()) {
            echo $row['artOmschrijving'] . '<br>';
        }
    }

    public function getTabelById($artId)
    {
        // hier ook gewoon fetch voor de zelfde reden
        $sql = "SELECT * FROM artikelen WHERE artId = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$artId]);
        $ids = $stmt->fetchAll();

        foreach ($ids as $id) {
            echo "<td>" . $id["artId"] . "</td><td>" . $id["artOmschrijving"] . "</td><td>" . $id["artInkoop"] . "</td><td>"
                . $id["artVerkoop"] . "</td><td>" . $id["artMinVoorraad"] . "</td><td>" . $id["artMaxVoorraad"] . "</td><td>"
                . $id["artLocatie"] . "</td><td>" . $id["levId"] . "</td>";
        }
    }

    public function getAlleTabellen()
    {
        $sql = "SELECT * FROM artikelen";
        $stmt = $this->connect()->query($sql);

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row["artId"] . "</td><td>" . $row["artOmschrijving"] . "</td><td>" . $row["artInkoop"] . "</td><td>"
                    . $row["artVerkoop"] . "</td><td>" . $row["artMinVoorraad"] . "</td><td>" . $row["artMaxVoorraad"] . "</td><td>"
                    . $row["artLocatie"] . "</td><td>" . "</td></tr>";
            }
        } else {
            echo "No results";
        }
    }

    // reads alle omschrijvingen van de artikelen van de gegeven ID
    public function getOmschrijvingID($levId)
    {

        // hier ook gewoon fetch voor de zelfde reden
        $sql = "SELECT * FROM artikelen WHERE artId = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$levId]);
        $ids = $stmt->fetchAll();

        foreach ($ids as $id) {
            echo $id['artOmschrijving'] . '<br>';
        }
    }

    // creates een nieuwe tabel voor artikelen
    public function setOmschrijvingStmt($artOmschrijving, $artInkoop, $artVerkoop, $artMinVoorraad, $artMaxVoorraad, $artLocatie, $levId)
    {

        // maakt SQL code voor de databas en gebruikt prepare zodat er geen SQL injectie kan gedaan worden
        $sql = "INSERT INTO artikelen(artOmschrijving, artInkoop, artVerkoop, artMinVoorraad, artMaxVoorraad, artLocatie, levId) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        // doet de execute en checkt of de execute is goed gegaan en console logged of het wel of niet goed is gegaan
        $stmt->execute([$artOmschrijving, $artInkoop, $artVerkoop, $artMinVoorraad, $artMaxVoorraad, $artLocatie, $levId]);
        if ($stmt->execute()) {
            echo "<script>console.log('nieuw artikel toegevoegt aan de database')</script>";
        } else {
            echo "<script>console.log('nieuw artikel kon niet worden toegevoegt aan de database')</script>";
        }
    }

    public function updateAllArtikelen($artOmschrijving, $artInkoop, $artVerkoop, $artMinVoorraad, $artMaxVoorraad, $artLocatie, $levId, $artId,)
    {
        $sql = "UPDATE artikelen SET artOmschrijving = ?, artInkoop = ?, artVerkoop = ?, artMinVoorraad = ?, artMaxVoorraad = ?, 
        artLocatie = ?, levId = ? WHERE artId = ?";
        $stmt = $this->connect()->prepare($sql);

        // doet de execute en kijkt of hij is goed gegaan
        $stmt->execute([$artOmschrijving, $artInkoop, $artVerkoop, $artMinVoorraad, $artMaxVoorraad, $artLocatie, $levId, $artId]);
        if ($stmt->execute()) {
            echo "<script>console.log('Update van de artikel is gelukt')</script>";
        } else {
            echo "<script>console.log('Er is iets fout gegaan, kon niet de artikel updaten')</script>";
        }
    }

    public function deleteArtikelen($artId)
    {
        // SLQ code voor de delete
        $sql = "DELETE FROM artikelen WHERE artId = ?";
        $stmt = $this->connect()->prepare($sql);

        // executes de sql code in de database en checkt of het goed is gegaan of niet
        $stmt->execute([$artId]);
        if ($stmt->execute()) {
            echo "<script>console.log('artikel has been deleted.')</script>";
        } else {
            echo "<script>console.log('Er is iets fout gegaan, kon niet de artikel deleten.')</script>";
        }
    }
}
