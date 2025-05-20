<?php
    //Aktuelle Zeit (hier Stunde ermitteln):
    $zeit = getdate();
    //var_dump($zeit); // Anzeige aller Infos dieses Arrays "getdate"
    echo $zeit["hours"] . " aktuelle Stunde";

    echo "<br>";
    echo "<br>";

    //Aktuele Zeitstempel (Sekunden vergangen seit 1.1.1970 Unix)
    echo $zeit["0"] . " aktuelle Zeitstempel (Sek. seit dem 1.1.1970)";

    echo "<br>";
    echo "<br>";

    //Datum anzeigen
    echo date("d - m - Y", 86400) . " aktuelles Datum";

    echo "<br>";
    echo "<br>";

    //Datumsangabe in deutscher Sprache
    setlocale(LC_TIME,"deu");
    echo strftime("%A" . " aktueller Wochentag");

    echo "<br>";
    echo "<br>";

    //Aktueller Zeitstempel anzeigen (Unix seit dem 1.1.1970)
    echo time() . " aktueller Zeitstempel anzeigen (Unix seit dem 1.1.1970)";

    echo "<br>";
    echo "<br>";

    // Unix-Zeitstempel eines Datums bestimmen
    echo mktime(0, 0, 0, 4, 10, 1975) . " Zeitstempel vom 10.04.1975";
?>