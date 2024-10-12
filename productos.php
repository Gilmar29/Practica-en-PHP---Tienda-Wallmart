<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'bdempresa_prueba');

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener productos en oferta
$busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : '';
$sql = "SELECT * FROM bp_productos WHERE oferta = 'S' AND (descripcion LIKE '%$busqueda%' OR codigo LIKE '%$busqueda%') ORDER BY descripcion";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos en Oferta - WallMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Productos en Oferta</h3>
        <form method="GET" action="productos.php">
            <div class="mb-3">
                <input type="text" class="form-control" name="busqueda" placeholder="Buscar por descripción o código" value="<?php echo $busqueda; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Precio Venta</th>
                    <th>Precio Oferta</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['codigo']; ?></td>
                            <td><?php echo $row['descripcion']; ?></td>
                            <td><?php echo $row['precio_venta']; ?></td>
                            <td><?php echo $row['precio_oferta']; ?></td>
                        </tr>
                    <?php } 
                } else { ?>
                    <tr><td colspan="4" class="text-center">No hay productos en oferta</td></tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- Botón de regreso al login -->
        <div class="text-center">
            <a href="login.php" class="btn btn-secondary mt-3">Ingresar otro cliente</a>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
