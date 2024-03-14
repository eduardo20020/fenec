<?php
// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $rol = $_POST["rol"];

    if (!empty($usuario) && !empty($password) && !empty($rol)) {
        // Incluir archivo de conexión
        require "conexion.php";

        // Consulta SQL para verificar si el usuario existe en la base de datos
        $sql = "SELECT * FROM usuarios WHERE usuarios = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$usuario]);
        $resultado = $stmt->fetch();

        if ($resultado["rol"]=="admin") {
            // Si el usuario existe, redireccionamos a la página de bienvenida
            header("Location: ../public/Admin.php");
            exit;
        }else if($resultado["rol"]=="alumno"){
            header("Location: ../public/Alumno.php");
            exit;
        }else {
            // Si el usuario no existe, mostrar un mensaje de error
            echo "El usuario no existe en la base de datos.";
        }
    } else {
        // Si faltan campos, mostramos un mensaje de error
        echo "Por favor, completa todos los campos.";
    }
} else {
    // Si no se envió el formulario por el método POST, redireccionamos al formulario de login
    header("Location: index.php");
    exit;
}
?>
