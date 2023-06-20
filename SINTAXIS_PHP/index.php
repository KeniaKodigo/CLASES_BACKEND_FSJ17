<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <h1>EMPEZANDO EL BACKEND</h1>

    <?php
        # // /** */

        #asignacion de variables

        $variable1 = "<h3>Hola Mundo</h3>"; //string
        #manera de imprimir variables
        echo $variable1;
        $entero = 10; //int
        $booleano = TRUE;
        $numero = 2.5; //double o float
        $nulo = null; //null
        $undefined;
        $array1 = ["cadena",3,7.8,false, null];
        $array2 = array("computadora","celular","audifonos");

        #imprimiendo arreglos y objetos
        print_r($array1);
        echo "<br>";
        var_dump($array1);

        #objetos en php (clases)
        /**
         * {    
         *     nombre: "kenia"
         * }
         */
        class Estudiante{
            public $nombre;
            public $apellido;
        }

        $estudiante1 = new Estudiante();
        $estudiante1->nombre = "kenia";
        $estudiante1->apellido = "paiz";
        echo "<br>";
        print_r($estudiante1);

        //definiendo una constante
        define("PI", 3.1416);
        echo PI;
        const GRAVEDAD = 100;
        echo GRAVEDAD;

        const ARREGLO_FRUTAS = ["manzana", "uva", "pera"];
        define("ARREGLO_VERDURAS", array("tomate", "chile", "zanahoria"));
    ?>
</body>
</html>