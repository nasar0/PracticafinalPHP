<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="container m-auto py-3">
        <nav class="row d-flex align-items-center">
            <div class="col-4"><span class="fw-bold">AGENDA</span>PERSONAL</div>
            <div class="col-8 text-end">
                <a href="listaamigos.php?action=mostrar" class="text-uppercase me-3 text-decoration-none">Amigos</a>
                <a href="listaJuegos.php?action=mostrarJuegos" class="text-uppercase me-3 text-decoration-none">Juegos</a>
                <a href="listaprestamos.php?action=mostrarPrestamos" class="text-uppercase me-3 text-decoration-none">Préstamos</a>
                <a href="" class="text-uppercase text-decoration-none">Salir</a>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <section class="row mb-4">
            <div class="col-12 text-end">
                <a href="listaamigos.php?action=insertarAmigos" class="text-uppercase me-3 text-decoration-none">Insertar amigos</a>
                <a href="listaamigos.php?action=buscador" class="text-uppercase text-decoration-none">Buscar amigos</a>
            </div>
        </section>

        <section class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Formulario de Amigo</h2>
                <form action="../CONTROLADOR/listaamigos.php?action=insert" method="post" class="border p-4 rounded shadow-sm">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de tu amigo:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido de tu amigo:</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Agregar Amigo</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
