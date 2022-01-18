<?php

include("./connect_db.php");

$per_page = 4;

$sql = "SELECT * FROM `users` order by tijd";

$result = mysqli_query($conn, $sql);

$result = mysqli_query($conn, $sql);

$records = "";
$plaats = 1;
//De while loop geeft alle gegevens weer uit de tabel
while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr>
    <td> " . $plaats++ . "</td>
    <td> " . $record["teamnaam"] .
    "</td><td> " . $record["datum"] . "</td>
    <td> " . $record["escaperoom"] . "</td>
    <td> " . $record["tijd"] . "</td>
    <tr>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="logo">
        <img src="img/logo.png" id="logo" alt=""/>
        </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>

    <div class="nav-links">
      <a href="./index.html" class="active">Home</a>
      <a href="./activiteiten.html">Activiteiten</a>
      <a href="./contact.html">Contact</a>
      <a href="./score.php">Score</a>
      <a href="./overons.html">Over ons</a>
    </div>
  </div>

  <table id="leaderboard">
        <thead>
            <tr>
                <th scope="col">Plaats</th>
                <th scope="col">Teamnaam</th>
                <th scope="col">Datum</th>
                <th scope="col">Escaperoom</th>
                <th scope="col">Behaalde Tijd</th>
            </tr>
        </thead>
        <tbody>
            <?php
        echo $records;
    ?>
        </tbody>
    </table>

</body>
</html>