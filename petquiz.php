<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b6acd16b3.js" crossorigin="anonymous"></script>
    <title>Documents</title>
  </head>

  <html>
  <body>
  <p class="goodjob"> Good Job! You are officially signed up! Now, we would like to know a little bit more about your pet! </p>

  <div class="container">
    <div>What size is your pet?</div>
    <div>


<?php

define('servername', 'localhost:3306');
define('dBUsername', 'mahs_cakepopwomen');
define('dBPassword', 'mustangs');
define('dBName', 'mahs_cakepopwomen');


$link = mysqli_connect(servername, dBUsername, dBPassword, dBName);
if($link === false) {
  die("Error: Could not connect." . mysqli_connect_error());
}

if(isset($_GET['size'])) {
  $sizeName = $_GET['size'];

$sql = "SELECT * FROM size WHERE sizeId = 2";
if($result = mysqli_query($link, $sql)) {
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)){
    $dbselected = $row['size'];
}
mysqli_free_result($result);
}
else {
  echo "Something went wrong...";
}
}
else {
  echo "ERROR: Could not execute $sql." . mysql_error($link);
}
}



$options = array('Small', 'Medium', 'Large');

    echo "<select>";
    foreach($options as $option){
      if ($dbselected == $option) {
        echo "<option selected='selected' value='$option'>$option</option>";
}
else {
  echo "<option value='$option'>$option</option>";
}
    }
    echo "</select>";

?>
 <form class="form-petquiz" action="petquiz.php" method="post">
                <input type="varchar" name="sizeId" placeholder="Size">
<button type="submit" name="submit-q">Submit!</button>


<?php
header("Location: ../petquiz.php");
?>

</div>
</div>

</body>
</html>