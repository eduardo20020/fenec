<?php
include('PHP/conexion.php');

session_start(); // Inicia la sesión, si aún no ha sido iniciada

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $rol = $_POST["rol"]; // Agregado el campo de rol en el formulario HTML

    // Validación simple (puedes agregar validaciones más seguras)
    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM usuarios_login WHERE usuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            // Verifica la contraseña usando password_verify
            if ($password == $row['password']) {
                // Inicio de sesión exitoso, establece el rol en la sesión
                $_SESSION['username'] = $row["usuario"];
                $_SESSION['rol'] = $row["rol"];
                
                // Redirige según el rol
                if ($row["rol"] == "alumno") {
                    header("Location: dashboard.php");
                    exit();
                } 
              
            } else {
                echo "Contraseña incorrecta <br>";
            }
        } else {
            echo "Usuario no encontrado <br>";
        }

        $stmt->close();
    } else {
        echo "Por favor, completa todos los campos.";
    }
}
?>
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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Inicio de Sesión</h2>
                    <form method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="rol" class="form-label">Rol:</label>
                            <select id="rol" name="rol" class="form-select" required>
                                <option value="alumno">Alumno</option>
                                <option value="maestro">Maestro</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                    <p class="mt-3">¿No tienes una cuenta? <a href="PHP/registro.php">Regístrate aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
