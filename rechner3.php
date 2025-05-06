<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>" method="post">
    Zahl1:<br>
    <input type="text" name="zahl1"><br><br>
    Zahl2:<br>
    <input type="text" name="zahl2"><br><br>
    Rechnenoperator:
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>
    <input type="submit" name="calc" value="Berechnen"><br>
</form>

<?php
if (isset($_POST['calc']) && !empty($_POST['zahl1']) && !empty($_POST['zahl2']) && !empty($_POST['operator'])) {

    $z1 = $_POST["zahl1"];
    $z2 = $_POST["zahl2"];
    $op = $_POST["operator"];

    switch ($op) {
        case "+":
            $res = $z1 + $z2;
            echo $res;
            break;
        case "-":
            $res = $z1 - $z2;
            echo $res;
            break;
        case "*":
            $res = $z1 * $z2;
            echo $res;
            break;
        case "/":
            $res = $z1 / $z2;
            echo $res;
            break;
        default:
            echo "Bitte einen gültigen Rechnenoperator wählen";
    }
} else {
    echo "Bitte geben Sie die beinden Zahlen und den Grundrechenoperator ein";
}
?>