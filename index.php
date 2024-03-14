<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5 text-center">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2 class="text-center mb-4">Inicio de Sesión</h2>
            <form action="PHP/postLogin.php" method="post" onsubmit="return validateForm()">
                <div class="mb-3">
                    <label for="username" class="form-label">Usuario:</label>
                    <input type="text" id="username" name="usuario" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="rol" class="form-label">Rol:</label>
                    <select id="rol" name="rol" class="form-select">
                        <option value="alumno">Alumno</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                <p class="mt-3 text-center">¿Ya tienes una cuenta? <a href="php/registro.php">Inicia sesión aquí</a></p>
            </form>
        </div>
    </div>
</div>

<script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        
        // Validación básica: asegurarse de que los campos no estén vacíos
        if (username.trim() == "" || password.trim() == "") {
            alert("Por favor, completa todos los campos.");
            return false; // Evita que se envíe el formulario si hay campos vacíos
        }
        
        // Puedes agregar más validaciones aquí si es necesario
        
        return true; // Envía el formulario si pasa todas las validaciones
    }
</script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
