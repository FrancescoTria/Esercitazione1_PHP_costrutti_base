<?php

$prezzo = array(100, 200, 300);

$iva = 22;

foreach ($prezzo as $prezzi) {
    echo "Prezzo senza IVA: " . $prezzi . "€" . "<br>";
}

echo "<br>";

function prezzoConIva($prezzo, $iva)
{
    return $prezzo + ($prezzo * $iva / 100);
}

foreach ($prezzo as $prezzo) {
    echo "Prezzo con IVA: " . prezzoConIva($prezzo, $iva) . "€" . "<br>";
}
?>