<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center">Registro</h2>
                <form action="postRegistro.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="Cpassword" class="form-label">Confirmar Contraseña:</label>
                        <input type="password" class="form-control" id="Cpassword" name="Cpassword" required>
                    </div>
                    <!-- Nuevo campo para el rol -->
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol:</label>
                        <select class="form-select" id="rol" name="rol" required>
                            <option value="alumno">Alumno</option>
                            <option value="admin">Admin</option>
                            
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                    <p class="mt-3 text-center">¿Ya tienes una cuenta? <a href="../index.php">Inicia sesión aquí</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
