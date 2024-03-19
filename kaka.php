<!DOCTYPE html>
<html>
    <head>
        <title>Kalka</title>
		<meta charset="utf-8">
    </head>
    <body> 
        <form method="post" >
            <label>Liczba 1</label>
            <input type="number" name="x">
            <br>
            <label>Liczba 2</label>
            <input type="number" name="y">
            <br>
            <label>Liczba 3</label>
            <input type="number" name="z">
            <br>
            <input type="submit" name="sus" value="submit">
            <br>
        </form>
    </body>
    <?php
    if (isset( $_POST['x'])){
        $x = $_POST['x'];
    }
    if (isset( $_POST['y'])){
        $y = $_POST['y'];
    }
    if (isset( $_POST['z'])){
        $z = $_POST['z'];
    }
    function morbius($x, $y, $z)
        {
            if ($x>$y and $x>$z){
                echo $x;
            }
            elseif ($y>$x and $y>$z){
                echo $y;
            }
            else {
                echo $z;
            }
        }
    morbius($x,$y,$z)
    ?>
</html>