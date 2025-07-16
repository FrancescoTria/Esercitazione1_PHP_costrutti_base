<?php

for ($i = 1; $i <= 10; $i++) {
    echo "<h1>Tabellina del $i</h1>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . $i * $j . "<br>";
    }
}

?>