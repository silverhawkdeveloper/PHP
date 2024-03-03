<?php

$busca = explode(",", $seleccionado);
for ($i = 0; $i < sizeof($busca); $i++) {
    foreach ($pilotos as $piloto) {
        if ($busca[$i] == $piloto->id) {
            echo $piloto->nombre.'<br>';
        }
    }
}
?>