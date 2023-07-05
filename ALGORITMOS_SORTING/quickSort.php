<?php

function quickSort($arr){
    //validando que el arreglo tenga mas de un elemento
    if(count($arr) > 1){
        $pivote = $arr[0];
        //2 arreglos 
        $derecha = [];
        $izquierda = [];

        for($i = 1; $i < count($arr); $i++){
            if($arr[$i] < $pivote){
                //agregando el elemento al arreglo de la izquierda
                array_push($izquierda, $arr[$i]);
            }else{
                array_push($derecha, $arr[$i]);
            }
        }
        //utilizamos la recursividad para volver hacer el mismo proceso
        //array_merge => fusiona, concatena mas de un arreglo
        return array_merge(quickSort($izquierda), array($pivote), quickSort($derecha));
    }else{
        return $arr;
    }
}
print_r(quickSort([5,10,10,7,2,9,1,5]));


?>