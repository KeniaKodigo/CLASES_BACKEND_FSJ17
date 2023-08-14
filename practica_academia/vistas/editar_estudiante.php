<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Estudiantes</title>
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include "../modulos/header.php";  
        require "../controladores/Estudiantes.php";
        $estudiante = new Estudiantes();
        $datos = $estudiante->obtenerEstudianteById();
    ?>
    <main id="main">
        <section class="container">
            <h1>Editar Estudiante</h1>

            <form action="" method="POST">
                <?php foreach($datos as $value){ ?>
                <input type="hidden" value="<?php echo $value['id']; ?>" name="id_estudiante">
                <label for="">Nombre Completo</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo $value['nombre']; ?>">

                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="<?php echo $value['direccion']; ?>">

                <label for="">Telefono</label>
                <input type="text" name="telefono" class="form-control" value="<?php echo $value['telefono']; ?>">

                <label for="">Correo</label>
                <input type="text" name="correo" class="form-control" value="<?php echo $value['correo']; ?>">

                <label for="">Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $value['password']; ?>">

                <input type="submit" class="btn btn-success mt-4" value="Actualizar">

                <?php } ?>
            </form>
            <?php $estudiante->actualizar();  ?>
        </section>
    </main>
    <?php include "../modulos/footer.php";  ?>
</body>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/typed.js/typed.umd.js"></script>
<script src="../assets/js/main.js"></script>
</html>