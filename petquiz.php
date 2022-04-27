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


<!----Question 1----->

<?php

require 'dbh.inc.php';

if (isset($_POST['quiz-submit'])) {   

    $sql = "INSERT INTO Pets (size, fur, species, age) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
}
  
  $size  = $_POST['size'];
  $fur = $_POST['fur'];
  $species = $_POST['species'];
  $age = $_POST['age'];
?>



  <div class="container">
    <div>What size is your pet?</div>
<div>

<?php 

if(isset($_GET['size'])) {
  $size = $_GET['size'];


$sql = "SELECT * FROM size WHERE sizeId = 1, 2, 3, 4";
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

$options = array('', 'Small', 'Medium', 'Large');

    echo "<select>";
    foreach($options as $size){
      if ($dbselected == $size) {
        echo "<option selected='selected' value='$size'>$size</option>";
}
else {
  echo "<option value='$size'>$size</option>";
}
    }
    echo "</select>";

?>
</div>
</div>




<!----Question 2----->




<div class="container">
    <div>What fur type does your pet have?</div>
<div>

<?php

if(isset($_GET['fur'])) {
  $fur = $_GET['fur'];

$sql = "SELECT * FROM fur WHERE furId = 1, 2, 3, 4";
if($result = mysqli_query($link, $sql)) {
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)){
    $dbselected = $row['fur'];
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


$options = array('', 'Short', 'Medium', 'Long', 'Scales');

    echo "<select>";
    foreach($options as $fur){
      if ($dbselected == $fur) {
        echo "<option selected='selected' value='$fur'>$fur</option>";
}
else {
  echo "<option value='$fur'>$fur</option>";
}
    }
    echo "</select>";

?>


</div>
</div>





<!----- Question 3----->

<div class="container">
    <div>What is your pet's species?</div>
<div>

<?php


if(isset($_GET['species'])) {
  $species = $_GET['species'];

$sql = "SELECT * FROM species WHERE speciesId = 1, 2, 3, 4, 5";
if($result = mysqli_query($link, $sql)) {
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)){
    $dbselected = $row['species'];
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

$options = array('', 'Dawg', 'Cad', 'Bunni', 'Fizh', 'Monkee');

    echo "<select>";
    foreach($options as $species){
      if ($dbselected == $species) {
        echo "<option selected='selected' value='$species'>$species</option>";
}
else {
  echo "<option value='$species'>$species</option>";
}
    }
    echo "</select>";

?>
</div>
</div>






<!----- Question 4----->

<div class="container">
    <div>What is your pet's age?</div>
<div>

<?php

if(isset($_GET['age'])) {
  $age = $_GET['age'];

$sql = "SELECT * FROM age WHERE ageId = 1, 2, 3, 4, 5";
if($result = mysqli_query($link, $sql)) {
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)){
    $dbselected = $row['age'];
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

$options = array('', '3', '6', '9', '12', '15');

    echo "<select>";
    foreach($options as $age){
      if ($dbselected == $age) {
        echo "<option selected='selected' value='$age'>$age</option>";
}
else {
  echo "<option value='$age'>$age</option>";
}
    }
    echo "</select>";
  


?>

<form>
  <option value="Small"></option>
  <option value="Medium"></option>
  <option value="Large"></option>
</form>



</div>
</div>


</body>
</html>
