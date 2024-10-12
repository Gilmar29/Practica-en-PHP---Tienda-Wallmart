<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WallMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('walmart_logo.jpg'); /* Ruta de tu imagen de fondo */
            background-size: cover; /* La imagen cubrirá toda la pantalla */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que se repita la imagen */
            height: 130vh; /* La altura de la pantalla completa */
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            padding: 30px;
            border-radius: 10px;
            max-width: 400px;
            margin: 100px auto; /* Centrar el formulario en la pantalla */
        }
    </style></head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
           <br><br>
            <h3 class="">Registo del Cliente:</h3>
                <form action="validar.php" method="POST">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código de Cliente</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
