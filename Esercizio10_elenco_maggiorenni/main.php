<?php

$studenti = array(
    array("nome" => "Mario", "cognome" => "Rossi", "eta" => 18),
    array("nome" => "Luigi", "cognome" => "Bianchi", "eta" => 17),
    array("nome" => "Giovanni", "cognome" => "Verdi", "eta" => 18),
    array("nome" => "Francesco", "cognome" => "Neri", "eta" => 18),
    array("nome" => "Marco", "cognome" => "Gialli", "eta" => 17),
);

foreach ($studenti as $studente) {
    if ($studente["eta"] >= 18) {
        echo "Nome: " . $studente["nome"] . " - Cognome: " . $studente["cognome"] . " - Età: " . $studente["eta"] . " - Maggiorenne" . "<br>";
    } else {
        echo "Nome: " . $studente["nome"] . " - Cognome: " . $studente["cognome"] . " - Età: " . $studente["eta"] . " - Minorenne" . "<br>";
    }
}

?>