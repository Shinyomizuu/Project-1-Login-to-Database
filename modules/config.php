<?php
// Verbindungsdaten
$servername = "localhost";
$username = "root";
$password = "";
$database = "LAP_Datenbank";

// Verbindung zum MySQL-Server herstellen und prüfen
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Verbindungsfehler: " . $conn->connect_error);
}

// Prüfen, ob die Datenbank existiert und bei Bedarf erstellen
function databaseExists($conn, $database) {
    return $conn->query("SHOW DATABASES LIKE '$database'")-> num_rows > 0;
}

function createDatabase($conn, $database) {
    return $conn->query("CREATE DATABASE `$database`");
}

// Hauptlogik zur Überprüfung und Erstellung der Datenbank
if (!databaseExists($conn, $database)) {
    if (createDatabase($conn, $database)) {
        echo "Datenbank '$database' erfolgreich erstellt.";
    } else {
        echo "Fehler beim Erstellen der Datenbank: " . $conn->error;
    }
} else {
    echo "Datenbank '$database' existiert bereits.";
}


?>
