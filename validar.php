<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'bdempresa_prueba');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$codigo = $_POST['codigo'];
$password = $_POST['password'];

// Validar cliente
$sql = "SELECT * FROM bp_clientes WHERE codigo = '$codigo' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Redirigir a la página de productos si es cliente válido
    header("Location: productos.php?codigo=$codigo");
} else {
    // Cliente no válido
    echo "Cliente no cuenta con accesos";
}

$conn->close();
?>
