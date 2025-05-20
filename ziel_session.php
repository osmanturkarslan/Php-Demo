<?php
session_start();
error_reporting(0);

if (isset($_GET["del"])) {
    unset($_SESSION["name"]);
    unset($_SESSION["vorname"]);
} elseif (isset($_POST["send"])) {
    $name = $_SESSION["name"] = $_POST["name"];
    $vorname = $_SESSION["vorname"] = $_POST["vorname"];

    echo "Ihr Name ist: $name.<br>";
    echo "Ihr Vorname ist: $vorname.<br>";

    $eigene_Datei = $_SERVER["SCRIPT_NAME"];
    echo "<a href='$eigene_Datei?del=1'>Session-Werte loeschen</a>";
} else {
    $name = $_SESSION["name"];
    $vorname = $_SESSION["vorname"];

    echo "Ihr Name ist: $name.<br>";
    echo "Ihr Vorname ist: $vorname.<br>";

    $eigene_Datei = $_SERVER["SCRIPT_NAME"];
    echo "<a href='$eigene_Datei?del=1'>Session-Werte loeschen</a>";
}

echo "<br><a href='formular_session.php'>Zurueck zum Formular</a>";
?>