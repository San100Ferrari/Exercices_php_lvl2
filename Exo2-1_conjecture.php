<?php


function nb($un){
    while ($un!=1) {
    if ($un%2==0){
            $un=$un/2;
            echo $un;
            echo " ";
        }
     else {
            $un=$un*3+1;
            echo $un;
            echo " ";
        }
    }
}
nb(42);


?>