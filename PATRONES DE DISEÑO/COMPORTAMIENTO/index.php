<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Mensaje:</label>
        <input type="text" name="mensaje">
        <br>

        <select name="red" id="">
            <option value="slack">Slack</option>
            <option value="facebook">Facebook</option>
            <option value="whatsapp">WhatsApp</option>
        </select>

        <br>
        <input type="submit" value="Enviar Mensaje">
    </form>

    <?php
        require './mensajes.php';

        switch($_POST['red']){
            case "slack":
                $mensaje2 = new Compartir();
                $mensaje2->setMensaje(new Slack2);
                echo "<h2>" . $mensaje2->getMensaje($_POST['mensaje']) . "</h2>";
            break;
            case "facebook":
                $mensaje2 = new Compartir();
                $mensaje2->setMensaje(new Facebook2);
                echo $mensaje2->getMensaje($_POST['mensaje']);
        }
    ?>
</body>
</html>