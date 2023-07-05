<?php

function insertionSort1($n, $arr) {
    // Write your code here
    
    //variable para obtener la ultima del arreglo
    $ultima_posicion = end($arr); //3
    //count => tamanio del arreglo
    //echo $ultima_posicion;
    //ciclo en decremento
    //[2 4 6 8 3]
    for($i = $n -1; $i >= 0; $i--){
        //condicionamos si el anterior es mayor al ultimo
        if($i - 1 >= 0 && $arr[$i - 1] > $ultima_posicion){
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
            break;
        }
    }
}

insertionSort1(10, [2,3,4,5,6,7,8,9,10,1]);

?>