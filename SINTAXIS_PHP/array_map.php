<?php

//arreglos asociativos

$arreglo_personas = array(
    array("nombre" => "Luis Ramirez", "edad" => 24), //0
    array("nombre" => "Diana Flores", "edad" => 27), //1
    array("nombre" => "Margarita Salinas", "edad" => 20), //2
    array("nombre" => "Kevin Huezo", "edad" => 29) //3
);

array_map(function($persona) {
    echo "<b>Nombre: </b> " . $persona["nombre"] . " <b>Edad: </b>" . $persona["edad"] . "<br>";
}, $arreglo_personas);

print_r($arreglo_personas[0]["nombre"]);
echo "<br>";
var_dump($arreglo_personas[0]["nombre"]);

echo "<br>";
//filter => retorna un nuevo arreglo con los datos filtrados

$arreglo_filtrado = array_filter($arreglo_personas, function($persona) {
    return $persona["edad"] >= 25;
});
print_r($arreglo_filtrado);



?>