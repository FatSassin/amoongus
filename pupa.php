<?php
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
?>