<?php

/**
 * BubbleSort => Es un algoritmo de ordenamiento que revisa elemento por elemento de un arreglo, en base una condicion va intercambiando los valores y repite el proceso.
 */


function bubbleSort($array){
    //ciclo que nos ayudara a verificar si tenemos que volver a iterar el arreglo
    for($i=0; $i < count($array); $i++){
        //ciclo que se encargara de evaluar posicion por posicion y hacer el intercambio
        for($j =0; $j < count($array) - 1; /**4 */ $j++){
            /**
             * [2,5,8,1,3]
             * false 
             * [2,5,8,1,3]
             * false
             * [2,5,1,8,3]
             * [2,5,1,3,8] 
             */
            //condicionamos si la posicion actual es mayor que la posicion siguiente
            if($array[$j] > $array[$j + 1]){
                //hacemos el intercambio
                //posicion siguiente = posicion actual
                //posicion actual = posicion siguiente
                /***
                 * temporal = 1, 3
                 * array[3] = 8
                 * array[4] = 8
                 * array[2] = 1
                 * array[3] = 3
                 */
                $variable_temporal = $array[$j + 1];//posicion 3
                $array[$j + 1] = $array[$j];
                $array[$j] = $variable_temporal;
            }
        }
    }
    print_r($array);
}

bubbleSort([2,5,8,1,3]);

?>