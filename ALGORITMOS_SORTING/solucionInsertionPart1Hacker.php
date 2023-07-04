<?php

function insertionSort1($n, $arr) {
    // Write your code here
    
    //variable para obtener la ultima del arreglo
    $ultima_posicion = end($arr); //3
    //count => tamanio del arreglo
    //echo $ultima_posicion;
    //ciclo en decremento
    //[2 4 6 8 3]
    for($i = $n -1; $i >= 1; $i--){
        //condicionamos si el anterior es mayor al ultimo
        if($arr[$i - 1] > $ultima_posicion){
            //duplico el valor de la posicion anterior
            $arr[$i] = $arr[$i - 1];
            //print_r($arr);
            foreach($arr as $valor){
                echo $valor . " "; //2 4 6 8
            }
            echo "<br>";
        }else{
            $arr[$i] = $ultima_posicion;
            //print_r($arr);
            foreach($arr as $valor){
                echo $valor . " ";
            }
            echo "<br>";
        }
    }
}

insertionSort1(14, [1,3,5,9,13,22,27,35,46,51,55,83,87,23]);

?>