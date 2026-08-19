
<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mensaje recibido</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="card p-4">

            <h1 class="text-success">
                ¡Mensaje recibido!
            </h1>

            <hr>

            <p>
                <strong>Nombre:</strong>
                <?php echo $nombre; ?>
            </p>

            <p>
                <strong>Correo:</strong>
                <?php echo $correo; ?>
            </p>

            <p>
                <strong>Asunto:</strong>
                <?php echo $asunto; ?>
            </p>

            <p>
                <strong>Mensaje:</strong>
                <?php echo $mensaje; ?>
            </p>

            <a href="contactos.php" class="btn btn-primary">
                Volver al formulario
            </a>

        </div>

    </div>

</body>

</html>
