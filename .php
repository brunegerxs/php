<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "mi_basedatos";

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>

$sql = "SELECT idpersona, nombre , apellido , dni FROM  persona01";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "- id-persona: " . $fila["idpersona"] . " - nombre: " . $fila["nombre"] . " - apellido: " . $fila["apellido"] . "- dni:" . $fila["dni"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">idpersona</th>
      <td>nombre</td>
      <td>apellido</td>
      <td>dni</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
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
echo "Conexión exitosa";



$sql = "SELECT idpersona, nombre , apellido , dni FROM  persona01";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "- id-persona: " . $fila["idpersona"] . " - nombre: " . $fila["nombre"] . " - apellido: " . $fila["apellido"] . "- dni:" . $fila["dni"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">idpersona</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">dni</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>nombre</td>
      <td>apellido</td>
      <td>2234570</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>52563903</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>256373</td>
    </tr>
  </tbody>
</table>


</body>
</html>
