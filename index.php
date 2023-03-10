<?php
// include_once 'includes/classes/dbh.php';
include_once 'includes/classes/artikelen.php';
?>
<!doctype html>
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./includes/css/index.css">
    <title>Database application | Home</title>
</head>
<body>

    <!--navbar-->

<div class="container">
    <div class="wrapper">
      <h2>nieuwe artikel maken</h2>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="input-box">
          <input type="text" name="id" placeholder="Type hier de ID van de omschrijving" required>
        </div>
        <div class="input-box button">
          <input type="Submit" value="Versturen">
        </div>
        <div class="awnserContainer">
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $artId = $_POST['id'];
          if (empty($artId)) {
            echo "id moet nog ingevult worden";
          } else {
            $object = new Test();
            echo "<p>" . $object->getOmschrijvingStmt($artId) . "</p>"; 
          }
        }   
        ?>
        </div>
        </div>
      </form>
    </div>
  </div>


    <!-- footer -->

    </nav>
</body>

</html>