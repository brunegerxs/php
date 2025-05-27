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
