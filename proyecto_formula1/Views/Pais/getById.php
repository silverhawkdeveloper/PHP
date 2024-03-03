<?php

foreach ($paises as $pais) {
    if ($seleccionado == $pais->id) {
        echo $pais->imagen;
    }
}
?>