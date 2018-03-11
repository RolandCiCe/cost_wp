<?php
// Filtrando por slug
if (in_category('Investigaciones')) {
    include(TEMPLATEPATH. '/single-investigaciones.php');
} elseif (in_category('eventos')) {
    include(TEMPLATEPATH . '/single-eventos.php');
} elseif (in_category('Informes')) {
    include(TEMPLATEPATH . '/single-informes.php');
} elseif (in_category('Descargas')) {
    include(TEMPLATEPATH . '/single-descargas.php');
} elseif (in_category('Empleos')) {
    include(TEMPLATEPATH . '/single-empleos.php');
} else { // Sino, cargo otro single por defecto
    include(TEMPLATEPATH . '/single-default.php');
}
?>
