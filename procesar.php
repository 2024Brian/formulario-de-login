<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];
    $errors = array();

    if (empty($user) || empty($password) || empty($edad)) {
        $errors[] = "Todos los campos son obligatorios.";
    }

    if (!is_numeric($edad) || $edad < 18) {
        $errors[] = "Debes tener al menos 18 años.";
    }

    if ($user != "luis") {
        $errors[] = "El usuario es incorrecto.";
    }

    if ($password != "mendoza") {
        $errors[] = "La contraseña es incorrecta.";
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        echo "<p>Login exitoso.</p>";
    }
}
?>