<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Gestion de Profesores</h1>
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

            <label for="" class="form-label">Salario</label>
            <input type="text" name="salario" class="form-control" required>

            <label for="" class="form-label">Materia que imparte</label>
            <select name="materia" class="form-control">
                <option value="">--</option>
                <option value="Matematica">Matematica</option>
                <option value="Sociales">Sociales</option>
                <option value="Lenguaje">Lenguaje</option>
                <option value="Ciencia">Ciencia</option>
                <option value="Ingles">Ingles</option>
            </select>

            <label for="" class="form-label">Institucion</label>
            <input type="text" name="institucion" class="form-control" required>

            <label for="">Selecciona tu Encargado</label>
            <select name="horario" class="form-control">
                <option value="">Seleccione una Opcion</option>
                <option value="vsp">Vespertino</option>
                <option value="dur">Deurno</option>
                <option value="ntr">Nocturno</option>
            </select>

            <label for="">Cuantos turnos tiene?</label>
            <input type="number" name="cantidad" class="form-control">

            <input type="submit" class="btn btn-success mt-4" value="Gestionar Alumno">
        </form>
        </div>

        <?php
            require "../clases/Profesor.php";

        //no estaba todo validado en los input
        if (isset($_POST['nombre'], $_POST['edad'], $_POST['direccion'], $_POST['telefono'], $_POST['correo'],$_POST['salario'], $_POST['materia'], $_POST['institucion'], $_POST['cantidad'])) {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $salario = $_POST['salario'];
            $horario = $_POST['horario'];
            $institucion = $_POST['institucion'];
            $cantidaturnos = $_POST['cantidad'];
            $materiaImparte = $_POST['materia'];

            $profesor = new Profesor($nombre, $edad, $telefono, $direccion, $correo, $salario, $horario, $materiaImparte, $institucion, $cantidaturnos);
            $profesor->salario();

            echo $profesor->informacionGeneral();
            echo $profesor->informacionProfesor();
        }
        ?>
</body>
</html>
