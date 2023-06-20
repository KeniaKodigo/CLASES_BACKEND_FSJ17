<?php 

#if-else, operador ternario, switch, if-else if-else


//terminar el numero en 4
function terminarNumero($numero){
    if($numero % 10 == 4){
        echo "El numero termina en 4";
    }else{
        echo "El numero NO TERMINA en 4";
    }
}
terminarNumero(14);

//rango de salarios = vendedor (350 - 500), 
//administrador(690 en adelante), 
//cajero(501 - 690)
//conserge (- 350)

function rangoSalarios($salario){
    if($salario >= 350 && $salario <= 500){
        echo "Usted es vendedor";
    }else if($salario >= 501 && $salario <= 690){
        echo "Usted es cajero";
    }else if($salario >= 691){
        echo "Usted es administrador";
    }else{
        echo "Usted es conserge";
    }
}
echo "<br>";
rangoSalarios(780);

//switch => evaluar las estaciones del año


?>