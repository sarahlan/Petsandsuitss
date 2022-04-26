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
    <div>Selected From Array</div>
    <div>Selected from DB Record</div>
    <div>

    <?php
    $selected = "Small";
    $options = array('Small', 'Medium', 'Large');

    echo "<select>";
    foreach($options as $option){
      if ($selected == $option) {
        echo "<option selected='selected' value='$option'>$option</option>";
}
else {
  echo "<option value='$option'>$option</option>";
}
    }
    echo "</select>";
    
  ?>
</div>
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

$sql = "SELECT * FROM size";
if($result = mysqli_query($link, $sql)) {
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)){
  }
}
}

$options = array('Small', 'Medium', 'Large');

    echo "<select>";
    foreach($options as $option){
      if ($selected == $option) {
        echo "<option selected='selected' value='$option'>$option</option>";
}
else {
  echo "<option value='$option'>$option</option>";
}
    }
    echo "</select>";

?>
</div>
</div>

</body>
</html>