<?php
// Filtrando por slug
if (in_category('Investigaciones')) {
    include(TEMPLATEPATH. '/single-investigaciones.php');
} elseif (in_category('Eventos-Inicio')) {
    include(TEMPLATEPATH . '/single-eventos.php');
} elseif (in_category('Informes')) {
    include(TEMPLATEPATH . '/single-informes.php');
} elseif (in_category('Descargas')) {
    include(TEMPLATEPATH . '/single-descargas.php');
} elseif (in_category('Empleos')) {
    include(TEMPLATEPATH . '/single-empleos.php');
} elseif (in_category('Transporte')) {
      include(TEMPLATEPATH . '/single-dashboard-aseguramiento-transporte.php');
} elseif (in_category('Desechos')) {
      include(TEMPLATEPATH . '/single-dashboard-aseguramiento-desechos.php');
} elseif (in_category('Edificacion')) {
      include(TEMPLATEPATH . '/single-dashboard-aseguramiento-edificacion.php');
} elseif (in_category('Energetica')) {
      include(TEMPLATEPATH . '/single-dashboard-aseguramiento-energetica.php');
} elseif (in_category('Hidraulica')) {
      include(TEMPLATEPATH . '/single-dashboard-aseguramiento-hidraulica.php');
} elseif (in_category('Telecomunicaciones')) {
      include(TEMPLATEPATH . '/single-dashboard-aseguramiento-telecomunicaciones.php');
} elseif (in_category('buenaspracticas')) {
    include(TEMPLATEPATH . '/single-buenas-practicas.php');
} elseif (in_category('Charlas')) {
    include(TEMPLATEPATH . '/single-eventos-charlas.php');
} elseif (in_category('Capacitaciones')) {
    include(TEMPLATEPATH . '/single-eventos-capacitaciones.php');
} elseif (in_category('Presentaciones')) {
    include(TEMPLATEPATH . '/single-eventos-presentaciones.php');
} elseif (in_category('Boletines')) {
    include(TEMPLATEPATH . '/single-boletines.php');
} else { // Sino, cargo otro single por defecto
    include(TEMPLATEPATH . '/single-default.php');
}
?>
