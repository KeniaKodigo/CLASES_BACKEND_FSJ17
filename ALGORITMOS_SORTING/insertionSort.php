<?php

/**
 * InsertionSort: Es un algoritmo de ordenamiento que se basa en un punto de interseccion para evaluar las posiciones anteriores del arreglo
 */

function insertionSort($arreglo){
    for($i=0; $i < count($arreglo); $i++){
        /**
         * [5,8,1,2]
         * false
         * false
         * [5,1,8,2]
         */
        $punto_interseccion = $i - 1; //-1, 0, 1, 2
        $valor_posicion = $arreglo[$i]; //8, 1, 2

        /**
         * $arreglo[$punto_interseccion]
         * $arreglo[0] = 5
         * $arreglo[1] = 8
         */
        //condicionando si se puede evaluar posiciones anteriores
        while($punto_interseccion >= 0 && $valor_posicion < $arreglo[$punto_interseccion]){
            //intercambio (limbo)
            /**[5,8,1,2]
             * [5, ,8,2]
             * $arreglo[2] = $arreglo[1]
             * $arreglo[1] = 1
             * [5,1,8,2]
             * 
             * $arreglo[1] = $arreglo[0] //5
             * $arreglo[0] = 1
             * [1,5,8,2]
             * 
             * $arreglo[3] = 8
             * $arreglo[2] = 2
             * [1,5,2,8]
             * 
             * $arreglo[2] = 5
             * $arreglo[1] = 2
             * [1,2,5,8]
             */
            $arreglo[$punto_interseccion + 1] = $arreglo[$punto_interseccion];
            $arreglo[$punto_interseccion] = $valor_posicion;
            //le restamos uno para evaluar posicion anterior
            $punto_interseccion = $punto_interseccion - 1; //0, -1, 1, 0
        }
    }

    print_r($arreglo);
}

insertionSort([5,8,1,2]);



?>