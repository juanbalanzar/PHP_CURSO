<?php
// variable constante (define), No se puede cambiar valor más de una vez y son varibales globales

define('NOMBRE', 'alñbrtto ');
echo NOMBRE;

// Arreglos
$semana = array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo');
$semanados = ['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo'];
// Agrewgar posicion
$semana[7]= 'Juanbb';
echo $semana[7] . '<br />';
echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';
?>
