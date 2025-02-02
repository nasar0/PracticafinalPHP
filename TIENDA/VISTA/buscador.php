<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Personal - Minecraft Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css"> <!-- Archivo CSS externo -->
</head>

<body>
    <header class="container-fluid">
        <nav class="container d-flex justify-content-between align-items-center">
            <div class="pixel-text">AGENDA PERSONAL</div>
            <div>
                <a href="listaamigos.php?action=mostrar" class="pixel-button">Amigos</a>
                <a href="listajuegos.php?action=mostrarJuegos" class="pixel-button">Juegos</a>
                <a href="listaprestamos.php?action=mostrarPrestamos" class="pixel-button">Préstamos</a>
                <a href="../VISTA/index.php" class="pixel-button">Salir</a>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        <section>
            <form action="listaamigos.php?action=buscar" method="post" class="mb-4">
                <div class="input-group">
                    <input type="search" name="bucador" id="buscador" class="form-control pixel-input" placeholder="Buscar amigos...">
                    <button type="submit" class="btn pixel-button">Buscar</button>
                </div>
            </form>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>