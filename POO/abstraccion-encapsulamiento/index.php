<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include "./header.php"; ?>
    <div class="container">
        <h1 class="text-center">Gestion de Planilla</h1>
        <!-- 
            GET, POST, PUT, DELETE
        -->
        <form action="" method="POST">
            <label for="">Nombre del Empleado</label>
            <input type="text" name="nombre" class="form-control">

            <label for="">Cargo</label>
            <input type="text" name="cargo" class="form-control">

            <label for="">Salario</label>
            <input type="text" name="salario" class="form-control">

            <input type="submit" class="btn btn-primary mt-4" value="Gestionar Planilla">
        </form>
    </div>

    <?php
        /**
         * include() => si nos equivocamos genera una advertencia
         * require() => si nos equivocamos genera un error
         * 
         * variables magicas => $_POST
         * 
         * metodos para verificar si un campo o elemento esta vacio o no
         * isset() => evalua de forma global
         * empty() => evalua de forma local
         */
        require "./Planilla.php";
        #enviamos por via POST el name de cada input
        if(isset($_POST['nombre'], $_POST['cargo'], $_POST['salario'])){
            $nombre = $_POST['nombre'];
            $cargo = $_POST['cargo'];
            $salario = $_POST['salario'];
            $empleado = new Planilla($nombre, $cargo, $salario);
            $empleado->calcularDeducciones();
            echo $empleado->resumen();
        }
        
    ?>

</body>
</html>