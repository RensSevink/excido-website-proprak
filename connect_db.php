<?php
    // Met deze gegevens kunnen we inloggen op de mysql-server en een database selecteren
    $servername = "localhost";
    $username = "root";
    $password = ""
    $dbname = "escape_room_tijden";

    // Met deze functie maken we contact me de mysql-server
    $conn = mysqli_connect($servername, $username, $password, $dbname);
?>