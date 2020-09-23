<?php


function verbe($v){
    echo "je";
    $first=str_replace("er","e",$v);
    echo " ".$first;
    echo "<br />";
    echo "tu";
    $second=str_replace("er","es",$v);
    echo " ".$second;
    echo "<br />";
    echo "il/elle";
    $first=str_replace("er","e",$v);
    echo " ".$first;
    echo "<br />";
    echo "nous";
    $ons=str_replace("er","ons",$v);
    echo " ".$ons;
    echo "<br />";
    echo "vous";
    $ez=str_replace("er","ez",$v);
    echo " ".$ez;
    echo "<br />";
    echo "ils/elles";
    $ent=str_replace("er","ent",$v);
    echo " ".$ent;
    echo "<br />";
}
verbe("programmer");


?>