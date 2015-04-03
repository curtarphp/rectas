<?php  
include ("calculaPendiente.php");


$coordenadas = array (
$a = array(2,2),
$b = array(4,4),
$c = array(6,6),
$d = array(0,8),
);

$x = array_column($coordenadas, 0);
$y = array_column($coordenadas,1);

if (calculaPendiente($x,$y)){
    echo "Todos los puntos forman una recta";
}else{
    echo "No todos los puntos forman parte de la recta.";
}

