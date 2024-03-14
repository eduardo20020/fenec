<?php
// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $rol = $_POST["rol"];

    if (!empty($usuario) && !empty($password) && !empty($rol)) {
        // Incluir archivo de conexión
        require "conexion.php";

        // Consulta SQL para verificar si el usuario existe en la base de datos y la contraseña es correcta
        $sql = "SELECT * FROM usuarios WHERE usuarios = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$usuario]);
        $resultado = $stmt->fetch();

        if ($resultado) {
            // Verificar si la contraseña es correcta
            if ($password ==  $resultado["password"]) {
                // Si la contraseña es correcta, redireccionamos según el rol del usuario
                if ($resultado["rol"] == "admin") {
                    header("Location: ../dashboard.php");
                    exit;
                } else if ($resultado["rol"] == "alumno") {
                    header("Location: ../public/Alumno.php");
                    exit;
                }
            } else {
                // Si la contraseña no es correcta, mostrar un mensaje de error y redirigir al inicio de sesión
                echo "<script>alert('La contraseña es incorrecta')</script>";
                echo "<script>window.location.href='../index.php';</script>";
                exit;
            }
        } else {
            // Si el usuario no existe, mostrar un mensaje de error y redirigir al inicio de sesión
            echo "<script>alert('El usuario no existe en la base de datos')</script>";
            echo "<script>window.location.href='../index.php';</script>";
            exit;
        }
    } else {
        // Si faltan campos, mostramos un mensaje de error
        echo "Por favor, completa todos los campos.";
    }
} else {
    // Si no se envió el formulario por el método POST, redireccionamos al formulario de inicio de sesión
    header("Location: index.php");
    exit;
}
?>
