<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Personal - Minecraft Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php require_once("header.php") ?>
    <main class="container mt-4">
        <section class="mb-4">
            <div class="d-flex justify-content-end">
                <a href="listaamigos.php?action=insertarAmigos" class="pixel-button">Insertar amigos</a>
                <a href="listaamigos.php?action=buscador" class="pixel-button ms-3">Buscar amigos</a>
            </div>
        </section>
        <section>
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="text-center mb-4">Lista de Amigos</h2>
                    <div class="table-responsive block-effect">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Fecha de Nacimiento</th>
                                    <?php if (strcmp($user, "ADMIN") == 0) echo "<th scope='col'> Nombre Usuario </th>" ?>
                                    <?php if (strcmp($user, "ADMIN") != 0) echo "<th scope='col'> Puntuacion </th>" ?>
                                    <th scope="col">Acciones</th>
                                    <?php 
                                    if (strcmp($user, "ADMIN") != 0)
                                        echo"<td class='align-middle'>
                                        <a href='listaamigos.php?action=botonOrdenar&cont={$cont}' class='btn btn-warning btn-sm pixel-button'>ordenar nombre</a>
                                    </td>
                                    <td class='align-middle'>
                                        <a href='listaamigos.php?action=botonOrdenar2&cont={$cont}' class='btn btn-warning btn-sm pixel-button'>ordena fechar</a>
                                    </td>
                                </tr>"
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listaAmigos as $amigo) {
                                    echo "
                                    <tr class='text-center align-middle'>
                                        <td class='align-middle'>{$amigo->nombre}</td>
                                        <td class='align-middle'>{$amigo->apellido}</td>
                                        <td class='align-middle'>{$amigo->fecha}</td>";
                                    if (strcmp($user, "ADMIN") == 0) echo "<td class='align-middle'>{$amigo->usuNom}</td>";
                                    if (strcmp($user, "ADMIN") != 0) echo "<td class='align-middle'>{$amigo->punt}</td>";
                                    echo "<td class='align-middle'>
                                            <a href='listaamigos.php?action=insertarAmigos&id={$amigo->id_amigo}' class='btn btn-warning btn-sm pixel-button'>Modificar</a>
                                        </td>";
                                    if (strcmp($user, "ADMIN") == 0)
                                    echo "<td class='align-middle'>
                                        <a href='listaamigos.php?action=verificar&id={$amigo->id_amigo}' class='btn btn-warning btn-sm pixel-button'>VERIFICAR</a>
                                    </td>";
                                }
                                ;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>