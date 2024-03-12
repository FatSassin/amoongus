<!DOCTYPE html>
<html>
    <head>
        <title>Seven Eleven</title>
		<meta charset="utf-8">
    </head>
    <body> 
        My Favourite Number is Seven.
        <h1>SEVEN ELEVEN</h1>
        <!--
        <form method="post">
            <label>ile miechow</label>
            <input type='number' name="x" value="iks">
            <br>
            <label>ile kaski</label>
            <input type='number' name="y" value="igreg">
            <br>
            <input type="submit" name="go" value="Submit" />
        </form>
        -->
        <h1>akaka</h1>
        <?php
            //zad1
            $kanapka = 1;
            while ($kanapka < 11){
                echo $kanapka." , ";
                $kanapka++;
            }
            echo "<br>";
            
            
            //zad2
            $start = 10;
            while ($start > 0){
                echo $start." , ";
                $start--;
            }
            echo "<br>";
            
            
            //zad3
            $dod = 1;
            $suow = 0;
            while ($dod < 11){
                echo $dod." , ";
                $suow = $suow + $dod;
                $dod++;
            }
            echo "<br>";
            echo $suow;
            echo "<br>";
            
            
            //zad4
            for ($i = 1; $i < 21; $i++){
                if ($i > 21) {
                }
                if ($i%2==0){
                    echo $i." , ";
                }
            }
            echo "<br>";
            
            
            //zad5
            /*
            $x = (isset($_POST['x']));
            $y = (isset($_POST['y']));
            for ($i = 0;$i <= $x; $y+$y){
                echo $y;
            }
            */
            echo "<br>";


            //zad6
            $ciag = 5;
            $suma = 0;
            while ($ciag < 1000){
                echo $ciag."<br>";
                $suma = $suma + $ciag;
                $ciag=$ciag+10;
            }
            echo "<br>";
            echo $suma;
        ?>
    </body>
</html>