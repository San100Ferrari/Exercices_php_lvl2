<?php


function lapin($mois){
    $l=1;
    $L=0;
    $t=0;
    for($i=0;$i<$mois;$i++){
        echo $L;
        $t=$l+$L;
        $L=$l;
        $l=$t;
        echo "<br />";
    }
}

lapin(12);


?>