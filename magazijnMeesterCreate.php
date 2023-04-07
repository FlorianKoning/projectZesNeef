<!-- Florian Koning -->

<?php
include_once 'includes/classes/artikelen.php';
?>

<!DOCTYPE html>
<html5 lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./includes/css/style.css">
        <title>DataBase appilaction | artikelen</title>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link active" href="magazijnMeesterMenu.php">magazijnMeester</a>
                        <a class="nav-link" href="leverancierPage.php">Leverancier</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="logoContainer">
            <img src="./includes/images/Bas-Logo.png" alt="Bas Logo">
            <h3>Boodschappenservice Bas Brengt Boodschappen</h3>
        </div>

        <div class="middelStuk">
            <div class="tabelContainer">
                <form role="var" method="POST">
                    <a class="btn btn-outline-light" href="magazijnMeesterMenu.php" role="buttton">Terug</a>
                    <button class="btn btn-outline-success" type="submit" value="submit" name="submit" style="margin-left: 650px;">Submit</button>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">artOmschrijving</span>
                        <input type="text" class="form-control" placeholder="artOmschrijving" aria-label="artOmschrijving" aria-describedby="basic-addon1" name="artOmschrijving" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">artInkoop</span>
                        <input type="text" class="form-control" placeholder="artInkoop" aria-label="artInkoop" aria-describedby="basic-addon1" name="artInkoop" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">artVerkoop</span>
                        <input type="text" class="form-control" placeholder="artVerkoop" aria-label="artVerkoop" aria-describedby="basic-addon1" name="artVerkoop" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">artMinVoorraad</span>
                        <input type="text" class="form-control" placeholder="artMinVoorraad" aria-label="artMinVoorraad" aria-describedby="basic-addon1" name="artMinVoorraad" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">artMaxVoorraad</span>
                        <input type="text" class="form-control" placeholder="artMaxVoorraad" aria-label="artMaxVoorraad" aria-describedby="basic-addon1" name="artMaxVoorraad" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">artLocatie</span>
                        <input type="text" class="form-control" placeholder="artLocatie" aria-label="artLocatie" aria-describedby="basic-addon1" name="artLocatie" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">levId</span>
                        <input type="text" class="form-control" placeholder="levId" aria-label="levId" aria-describedby="basic-addon1" name="levId" required>
                    </div>
                </form>

                <?php
                $inputArtOmschrijving = NULL;
                $inputArtInkoop = NULL;
                $inputArtVerkoop = NULL;
                $inputArtMinVoorraad = NULL;
                $inputArtMaxVoorraad = NULL;
                $inputArtLocatie = NULL;
                $inputLevId = NULL;

                $object = new Artikelen();
                if (isset($_POST['submit'])) {
                    $inputArtOmschrijving = $_POST['artOmschrijving'];
                    $inputArtInkoop = $_POST['artInkoop'];
                    $inputArtVerkoop = $_POST['artVerkoop'];
                    $inputArtMinVoorraad = $_POST['artMinVoorraad'];
                    $inputArtMaxVoorraad = $_POST['artMaxVoorraad'];
                    $inputArtLocatie = $_POST['artLocatie'];
                    $inputLevId = $_POST['levId'];

                    $object->CreateArtikel($inputArtOmschrijving, $inputArtInkoop, $inputArtVerkoop, $inputArtMinVoorraad, $inputArtMaxVoorraad, $inputArtLocatie, $inputLevId);
                }
                ?>
            </div>
        </div>

    </body>
</html5