<?php
include_once 'includes/classes/artikelen.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataBase appilaction | artikelen</title>
</head>
<body>
    
   
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

</body>
</html>