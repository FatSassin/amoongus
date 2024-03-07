<!DOCTYPE html>
<html>
    <head>
        <title>Bolyston Club</title>
		<meta charset="utf-8">
    </head>
    <body> 
        
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Upload Image" name="submit">
    </form>
        <!--
        <form method="post">
            <input type='number' name="liczba" value="liczba1" />
            <input type='number' name="2liczba" value="liczba2" />
            <input type='number' name="3liczba" value="liczba3" />
            <input type='number' name="4liczba" value="liczba4" />
            <input type="submit" name="go" value="Submit" />
        </form>
        -->
        <?php 
            $dir    = 'uploads/';
            $files1 = scandir($dir);
            $files2 = scandir($dir, SCANDIR_SORT_DESCENDING);
            for($i = 2; $i<sizeof($files1); $i++)
            {
                echo "<img src='uploads/$files1[$i]' alt='ass' style='height: 100px; width:100px;'> <br>";
                //echo file_get_contents("uploads/$files1[$i]");
            }

            /* 
              $a = $_POST['liczba'];
              $b = $_POST['2liczba'];
              $c = $_POST['3liczba'];
              $d = $_POST['4liczba'];
              if ($b == 0 or $d == 0){
                echo "no can do";
              }
              else{
                $x = $a/$b + $c/$d;
                echo $x;
              };
            */

            /*
            $a = $_POST['liczba'];
            $b = $_POST['2liczba'];
            if ($b-4 == 0){
                echo "nuh uh";
            }
            else{
            $x = ($a+6)/($b-4);
            echo $x;
            }
            */

              
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

            /*
            $a = $_POST['liczba'];
            if ($a%2 == 0){
                echo "parysta";
            }
            else {
                echo "nieparista";
            }
            */

            /*
            $a = $_POST['liczba'];
            $b = $_POST['2liczba'];
            $x = $a/$b;
            if ($a%$b == 0){
                echo "podzielne, wynik ". $x;
            }
            else {
                echo "niepowdzielne";
            }
            */

            /*
            $a = $_POST['liczba'];
            if ($a>0){
                echo "dodatnia";
            }
            elseif ($a<0){
                echo "ujemna";
            }
            else {
                echo "rowne zero";
            }
            */

            /*
            $a = $_POST['liczba'];
            $b = $_POST['2liczba'];
            $c = $_POST['3liczba'];
            if ($a>$b and $a>$c){
                echo "liczba ". $a ." jest najwieksza";
            }
            elseif ($b>$a and $b>$c){
                echo "liczba ". $b ." jest najwieksza";
            }
            elseif ($c>$a and $c>$b){
                echo "liczba ". $c ." jest najwieksza";
            }
            else {
                echo "nie ma najwiekszej lcizby";
            }
            */


        ?>
    </body>