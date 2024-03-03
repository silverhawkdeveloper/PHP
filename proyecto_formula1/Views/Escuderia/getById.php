<?php

foreach ($escuderias as $escuderia) {
    if ($seleccionado == $escuderia->id) {
        echo $escuderia->nombre;
    }
}
?>