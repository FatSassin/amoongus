<!DOCTYPE html>
<html>
    <head>
        <title>Bolyston Club</title>
		<meta charset="utf-8">
    </head>
    <body>
        <form method="post">
            <input type='number' name="liczba" value="liczba1" />
            <input type='number' name="2liczba" value="liczba2" />
            <input type="submit" name="go" value="Submit" />
        </form>
        <?php  
              $a = $_POST['liczba'];
              $b = $_POST['2liczba'];
              if ($b == 0){
                echo "no can do";
              }
              else{
                $x = $a/$b;
                echo $x;
              };
              
            /*
            $wiek = -1;
            if ($wiek >=18){
                echo "Jestes pelnoletni bo masz $wiek lat.";
            }
            else if($wiek >=0){
                echo "nie jetess pelnoletni, poczekaj ". 18-$wiek . " wiosen";
            }
            else{
                echo "niema cie xd";
            }
            $x = 1;
            for($x;$x<10;$x++){
                echo " a ";
            }
            echo " <br>$x";
            */
        ?>
    </body>