<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Formulario de Contacto</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
```

</head>

<body>

```
<!-- Encabezado -->
<header class="text-center">
    <h1>Gestión Documental</h1>

    <nav class="mt-3">
        <a href="./index.php">Inicio</a>
        <a href="./contactos.php">Contacto</a>
    </nav>
</header>

<!-- Contenido principal -->
<main class="container contenido">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card p-4">

                <h2 class="text-primary text-center mb-3">
                    Contáctenos
                </h2>

                <p class="text-muted text-center">
                    Complete el siguiente formulario y nos comunicaremos con usted.
                </p>

                <form id="form-contacto" action="procesar.php" method="POST">

                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">
                            Nombre completo
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="nombre"
                            name="nombre"
                            placeholder="Ingrese su nombre"
                            required
                        >
                    </div>

                    <!-- Correo -->
                    <div class="mb-3">
                        <label for="correo" class="form-label">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            id="correo"
                            name="correo"
                            placeholder="ejemplo@correo.com"
                            required
                        >
                    </div>

                    <!-- Asunto -->
                    <div class="mb-3">
                        <label for="asunto" class="form-label">
                            Asunto
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="asunto"
                            name="asunto"
                            placeholder="Ingrese el asunto"
                            required
                        >
                    </div>

                    <!-- Mensaje -->
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">
                            Mensaje
                        </label>

                        <textarea
                            class="form-control"
                            id="mensaje"
                            name="mensaje"
                            rows="5"
                            placeholder="Escriba su mensaje"
                            required
                        ></textarea>
                    </div>

                    <!-- Botón -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            Enviar mensaje
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</main>

<!-- Pie de página -->
<footer>
    <p class="mb-0">
        &copy; 2026 Gestión Documental
    </p>
</footer>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
```

</body>

</html>
