<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Puedes agregar estilos adicionales si es necesario -->
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 120px;
            background: url('../img/i.PNG') no-repeat center center fixed; 
            background-size: cover;
            background-position: 70% 45%;
        }
        form {

        display: inline-block;
        text-align: left;
        border: 1px solid #1B6BC7 ;
        padding: 20px;
        border-radius: 10px;
        backdrop-filter: blur(15px); /* Ajusta el valor para cambiar la intensidad del desenfoque */
        background-color: rgba(0, 0, 0, 0.3); /* Negro con opacidad del 50% (0.5) */
        color: white;
        }

        label {
            display: block;
            margin-bottom: 17px;
            font-size: 16px;
        }

        input {
            width: 100%;
            padding: 5px;
         margin-bottom: 15px;
        }

button {
padding: 10px;
background-color: #1B6BC7  ;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}
h2 {
            color: #1B6BC7;
        } 
        a {
            color: blue;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-button:hover, .logout-button:active {
                background-color: #4B77DE; /* Cambia el color al hacer clic */
                filter: blur(1px); /* Aplica un efecto de desenfoque al hacer clic */
        }
    </style>
</head>
<body>
    <h2>Registro</h2>
    <form action="registro.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="Cpassword">Confirmar Contraseña:</label>
        <input type="Cpassword" id="Cpassword" name="Cpassword" required>

        <label for="Tel">Telefono:</label>
        <input type="Tel" id="Tel" name="Tel" required>


        <!-- Nuevo campo para el rol -->
        <label for="rol">Rol:</label>
        <select id="rol" name="rol" required>
            <option value="alumno">Alumno</option>
            
        </select>

        <button type="submit" class="logout-button">Registrarse</button>
        <p>¿Ya tienes una cuenta? <a href="../index.php">Inicia sesión aquí</a></p>
    </form>

    

    <?php
    include('conexion.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $rol = $_POST["rol"];

        // Validación simple (puedes agregar validaciones más seguras)
        if (!empty($username) && !empty($password) && !empty($rol)) {
            $sql = "INSERT INTO usuarios_login (usuario, password, rol) VALUES ('$username', '$password', '$rol')";

            if ($conn->query($sql) === TRUE) {
                echo "Registro exitoso. Ahora puedes iniciar sesión.";
            } else {
                echo "Error al registrar: " . $conn->error;
            }
        } else {
            echo "Por favor, completa todos los campos.";
        }
    }
    ?>
</body>
</html>
