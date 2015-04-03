<?php

/**
 * Comprueba que todos los puntos (x,y) forman parte de una recta.
 * 
 * @param array [coor x][coor y]
 * @return boolean.
 */

function calculaPendiente($x,$y){
    
    if(is_array($x) && is_array($y)){
        for ($i=2;$i<count($x);$i++){
            if (($x[$i-1]-$x[$i-2])/($x[$i]-$x[$i-1])!= ($y[$i-1]-$y[$i-2])/($y[$i]-$y[$i-1])){
                return false; // Los puntos no forman una recta;
            }
        }
    
        return true; // Los puntos forman una recta;
    
    }
}