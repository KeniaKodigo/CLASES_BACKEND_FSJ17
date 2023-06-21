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

function calcularEstaciones($estaciones){
    switch($estaciones){
        case "invierno":
            $estaciones = "invierno";
            break;
        case "verano":
            $estaciones = "verano";
            break;
        case "fall":
            $estaciones = "fall";
            break;
        case "primavera":
            $estaciones = "primavera";
            break;
        default:
            $estaciones = "ingrese una estacion";
            
    }
    return $estaciones; 
}
echo calcularEstaciones("carro");


#operador ternario
//[2,3,45,5]
function operadorTernario($arreglo){
    echo $arreglo[0] === 5 ? "La posicion 0 del arreglo empieza en 5" : "La posicion 0 NO INICIA en 5";
}
echo "<br>";
operadorTernario(["5",4,6,7,8]);

?>