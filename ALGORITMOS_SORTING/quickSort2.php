<?php

function quickSort2($arreglo){
    if(count($arreglo) > 1){
        //end => metodo para obtener el valor de la ultima posicion
        $pivote = end($arreglo);
        $izquierda = array();
        $derecha = array();

        //for($i=0; $i < count($arreglo) - 1; $i++)
        for($i = count($arreglo) - 2; $i >= 0; $i--){
            if($arreglo[$i] < $pivote){
                //agregando el elemento al arreglo de la izquierda
                array_push($izquierda, $arreglo[$i]);
            }else{
                array_push($derecha, $arreglo[$i]);
            }
        }
        return array_merge(quickSort2($izquierda), array($pivote), quickSort2($derecha));
    }else{
        return $arreglo;
    }
}

print_r(quickSort2([5,7,-4,11,3]));

?>