<?php
$servername = "localhost";
$username="root";
$userpwd ="";
$dbname="eje10";
// Create connection
$conn = mysqli_connect($servername, $username, $userpwd, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

//echo "esta bien"; //(prova se funziona la connessione)
?>