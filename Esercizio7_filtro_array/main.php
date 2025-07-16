<?php

$frutti = array("mela", "pera", "banana", "arancia", "kiwi");

foreach ($frutti as $frutto) { //funzionamento del foreach: per ogni elemento dell'array $frutti, stampa il valore di $frutto
    if (strlen($frutto) > 5) {
        echo $frutto . "<br>";
    }
}

?>