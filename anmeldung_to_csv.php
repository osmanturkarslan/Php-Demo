<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>" method="post">
    <h1>Anmeldung (Werte in csv/xls) gespeichert</h1>
    Name: <br>
    <input type="text" name="name"> <br><br>
    Vorname: <br>
    <input type="text" name="vorname"> <br><br>
    <input type="submit" name="anmeldung" value="Anmelden">
</form>

<?php

############################ Daten schreiben (Start) ############################

if (isset($_POST['anmeldung']) && !empty($_POST['name']) && !empty($_POST['vorname'])) {
    $handle_write = fopen("anmeldung.csv", "a");
    if ($handle_write === FALSE) {
        echo "<p> Datei konnte nicht zum Schreiben geöffnet werden </p>";
        exit("<p> Das program wird beendet </p>");
    }
    $name = $_POST["name"];
    $vorname = $_POST["vorname"];
    if (fputcsv($handle_write, array($name, $vorname), ';')) {
        echo '<p> Sie wurden wielfolgt angemeldet: </p>';
        echo 'Name: ' . htmlspecialchars($name) . "<br> Vorname: " . htmlspecialchars($vorname) . "<br>";
    } else {
        echo "<p> Das Schreiben der Daten ist fehlgeschlagen. </p>";
    }
    fclose($handle_write);

    ############################ Daten schreiben (Ende) ############################



    

    ############################ Daten lesen (Start) ############################

    echo "<br><br>Folgende Personnen haben sich schon angemeldet: <br><br>";
    $handle_read = fopen("anmeldung.csv", "r");
    $i = 1;
    while (($zeile = fgets($handle_read)) !== false) {
        $zeile = trim($zeile);
        if ($zeile !== "") {
            echo $i . ":" . htmlspecialchars($zeile) . "<br>";
            $i++;
        }
    }
    fclose($handle_read);
    ############################ Daten lesen (Ende) ############################
} else {
    echo "Bitte geben Sie Ihren Namen und Vornamen ein.";
}

?>