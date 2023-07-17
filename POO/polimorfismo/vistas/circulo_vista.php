<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- incluyendo el nav con php -->
    <?php 
        require "../clases/Circulo.php";
        include "./modulos/nav.php"; 
    ?>
    <section class="container mb-4">
        <h1>Area del Circulo</h1>
        <form action="" method="POST">
            <label for="" class="form-label">Ingrese el radio</label>
            <input type="number" class="form-control" name="radio" required>

            <input type="submit" class="btn btn-primary mt-4" value="Calcular Area">
        </form>
        <?php
            if(isset($_POST['radio'])){
                $circulo = new Circulo;
                $circulo->radio = $_POST['radio'];
        ?>
            <div class="alert alert-info" role="alert">
                <?php echo $circulo->calcularArea(); ?>
            </div>
        <?php } ?>
    </section>
    <!-- incluyendo el footer con php -->
    <?php include "./modulos/footer.php"; ?>

</body>
</html>