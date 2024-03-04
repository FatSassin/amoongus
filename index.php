<!DOCTYPE html>
<html>
    <head>
        <title>Bolyston Club</title>
		<meta charset="utf-8">
    </head>
    <body>
        <h1>PIZZA ORDER</h1>
        <form action="index.php" method="get">
            <select name="foods" id="foods">
                <option value="5">Pizza z Ananasem</option>
                <option value="2">Zimny Kot</option>
                <option value="99">Dupalacze</option>
                <option value="6">Czarne</option>
            </select>
            <input type="number" value="ile" name="liczba">
            <input type="submit" value="yes" name="amoung">
        </form>
        <br>
    </body>
</html>
<?php
    if (isset($_GET["foods"])) {
        $liczba = (int)$_GET["liczba"];
        $foods = (int)$_GET["foods"];
        $total = ($foods * $liczba);
        echo "cena wynosi {$total} pln";
        
    }
?>