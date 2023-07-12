<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
        require "../clases/Alumno.php";
    ?>
    <h1>Gestion de Alumnos</h1>
    <div class="container">
        <form action="" method="POST">
            <label for="" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre" class="form-control" required>

            <label for="" class="form-label">Edad</label>
            <input type="number" name="edad" class="form-control" required>

            <label for="" class="form-label">Direccion</label>
            <input type="text" name="direccion" class="form-control" required>

            <label for="" class="form-label">Telefono</label>
            <input type="text" name="telefono" class="form-control" required>

            <label for="" class="form-label">Correo Electronico</label>
            <input type="text" name="correo" class="form-control" required>

            <label for="" class="form-label">Carnet</label>
            <input type="text" name="carnet" class="form-control" required>

            <label for="" class="form-label">Cual es tu materia favorita?</label>
            <select name="materia" class="form-control">
                <option value="">--</option>
                <option value="Matematica">Matematica</option>
                <option value="Sociales">Sociales</option>
                <option value="Lenguaje">Lenguaje</option>
                <option value="Ciencia">Ciencia</option>
                <option value="Ingles">Ingles</option>
            </select>

            <label for="" class="form-label">Grado</label>
            <input type="text" name="grado" class="form-control" required>

            <label for="">Selecciona tu Encargado</label>
            <select name="encargado" class="form-control">
                <option value="">Seleccione una Opcion</option>
                <option value="Julio Moises Chacon">Julio Moises Chacon</option>
                <option value="Karina Elizabeth Figueroa">Karina Elizabeth Figueroa</option>
                <option value="Iris Yamileth Hernandez">Iris Yamileth Hernandez</option>
            </select>

            <input type="submit" class="btn btn-success mt-4" value="Gestionar Alumno">
        </form>

        <?php
        if(isset($_POST['nombre'], $_POST['edad'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'], $_POST['carnet'], $_POST['materia'], $_POST['grado'], $_POST['encargado'])){
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $carnet = $_POST['carnet'];
            $materia = $_POST['materia'];
            $grado = $_POST['grado'];
            $encargado = $_POST['encargado'];

            $alumno = new Alumno($nombre, $edad, $telefono, $direccion, $correo, $carnet, $materia, $grado, $encargado);
            echo $alumno->informacionGeneral();
            echo $alumno->informacionEstudiantil();
        }
        
    ?>
    </div>
    
</body>
</html>