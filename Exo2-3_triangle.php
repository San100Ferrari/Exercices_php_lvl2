<html>
<body><style>body{text-align:center;}</style>
<?php
function cr() {
    for($i=0;$i<10;$i++){
        for($j=0;$j<$i;$j++){
            echo "**";
        }
        echo "<br />";
    }
}
cr();

?>
</body>
</html>