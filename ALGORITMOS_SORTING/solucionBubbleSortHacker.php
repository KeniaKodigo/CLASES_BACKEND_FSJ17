<?php

//BubbleSort
function countSwaps($a) {
    // Write your code here
    $contador = 0;
    for($i=0; $i < count($a); $i++){
        for($j = 0; $j < count($a) - 1; $j++){
            if($a[$j] > $a[$j + 1]){
                $contador++;
                $temporal = $a[$j + 1];
                $a[$j + 1] = $a[$j];
                $a[$j] = $temporal;
            }
        }
    }
    //implode => convierte un arreglo en string
    //echo implode(" ", $a);
    //\n => salto de linea
    echo "Array is sorted in " . $contador . " swaps.\n";
    echo "First Element: " . $a[0] . "\n";
    //el ultimo elemento del arreglo
    echo "Last Element: " . $a[count($a) - 1];

}

?>