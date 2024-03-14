<?php
// Verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["Cpassword"];
    $rol = $_POST["rol"];

    // Validamos que las contraseñas coincidan
    if ($password !== $confirmPassword) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    // Incluimos el archivo de conexión a la base de datos
    require "conexion.php";

    // Verificamos si el usuario ya existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE usuarios = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$usuario]);
    $resultado = $stmt->fetch();

    if ($resultado) {
        echo "El usuario ya existe.";
        exit;
    }

    // Insertamos el nuevo usuario en la base de datos
    $sql = "INSERT INTO usuarios (usuarios, password, rol) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$usuario, $password, $rol]);
    if ($stmt->rowCount() > 0) {
        echo "Registro exitoso.";
        header("location: ../index.php");
    } else {
        echo "Error al registrar el usuario.";
    }

} else {
    // Si no se envió el formulario por el método POST, redireccionamos al formulario de registro
    header("Location: registro.php");
    exit;
}
?>
