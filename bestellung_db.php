<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daten speichern</title>
</head>

<body>
    <h1>Daten in eine Tabelle einfügen</h1>
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_obstladen";

    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $ort = $_POST["ort"];
    $sorte = $_POST["sorte"];
    $menge = $_POST["menge"];

    $verbindung = mysqli_connect($server, $user, $pass, $database)
        or die("Verbindung konnte nicht hergestellt werden.");

    $sql = "INSERT INTO tbl_bestellung (vorname, nachname, ort, sorte, menge)
                VALUES ('$vorname', '$nachname', '$ort', '$sorte', '$menge')";

    $abfrage = mysqli_query($verbindung, $sql);
    ?>
</body>

</html>