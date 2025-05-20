<?php
session_start();
error_reporting(0);

if (empty($_SESSION["name"]) and empty($_SESSION["vorname"])) {

    echo '
    <form action="ziel_session.php" method="post">
        Name:<br>
        <input type="text" name="name"><br>
        Vorname:<br>
        <input type="text" name="vorname"><br>
        <input type="submit" name="send" value="Absenden">
    </form>
    ';
} else {
    $name = $_SESSION["name"];
    $vorname = $_SESSION["vorname"];

    echo "Ihr Name ist: $name.<br>";
    echo "Ihr Vorname ist: $vorname.<br>";
}

echo "<br><a href='ziel_session.php'>Weiter zur Zieldatei</a>";
?>