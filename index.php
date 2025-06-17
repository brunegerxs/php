<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Persona</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>

        <h2 class="mt-5">Lista de Personas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">edad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = "localhost";
                $usuario = "root";
                $contrasena = "";
                $base_datos = "escuela";

                $conn = new mysqli($host, $usuario, $contrasena, $base_datos);

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Agregar nuevo registro
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = $conn->real_escape_string($_POST['nombre']);
                    $apellido = $conn->real_escape_string($_POST['apellido']);
                    $edad = (int)$_POST['edad']; // Asegurarse de que la edad sea un número entero

                    $sql_insert = "INSERT INTO persona (nombre, apellido, edad) VALUES ('$nombre', '$apellido', '$edad')";
                    if ($conn->query($sql_insert) === TRUE) {
                        echo "<div class='alert alert-success' role='alert'>Nuevo registro creado exitosamente</div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Error: " . $sql_insert . "<br>" . $conn->error . "</div>";
                    }
                }

                // Consultar registros
                $sql = "SELECT id, nombre, apellido, edad FROM persona";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    while($fila = $resultado->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>" . $fila["id"] . "</th>
                                <td>" . $fila["nombre"] . "</td>
                                <td>" . $fila["apellido"] . "</td>
                                <td>" . $fila["edad"] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>0 resultados</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>

