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

        $alumno = new Estudiantes();
        $datos = $alumno->obtenerEstudiantesActivos();
    ?>
    <main id="main">
        <section class="container">
            <h1>Gestion de Estudiantes</h1>

            <a href="./registrar_estudiante.php" class="btn btn-primary">Registrar Estudiante</a>

            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Bootcamp</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                        foreach($datos as $item){
                    ?>
                        <tr>
                            <td></td>
                            <td><?php echo $item['nombre']; ?></td>
                            <td><?php echo $item['telefono']; ?></td>
                            <td><?php echo $item['correo']; ?></td>
                            <td><?php echo $item['bootcamp']; ?></td>
                            <td>
                                <button>Editar</button>
                            </td>
                            <td>
                                <button>Cambiar Estado</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
    <?php include "../modulos/footer.php";  ?>
</body>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/typed.js/typed.umd.js"></script>
<script src="../assets/js/main.js"></script>
</html>