<?php
include("./connect_db.php");
include("./functions.php");
$teamnaam = sanitize($_POST["teamnaam"]);
$datum = sanitize($_POST["datum"]);
$escaperoom = sanitize($_POST["escaperoom"]);
$tijd = sanitize($_POST["tijd"]);
$sql = "INSERT INTO `users` (`id`, `teamnaam`, `datum`, `escaperoom`, `tijd`) VALUES (NULL, '$teamnaam', '$datum', '$escaperoom', '$tijd');";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<h1>Uw gegevens zijn opgeslagen</h1>";
    header("Refresh:4; url=./score.php");
}
else {
    echo "<h1>Uw gegevens zijn niet opgeslagen, probeer het opnieuw</h1>";
    header("Refresh:4; url=./score.php");
}
?>    