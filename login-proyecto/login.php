<?php
session_start();

$correo = $_POST['correo'] ?? '';
$password = $_POST['password'] ?? '';

$usuarios = json_decode(file_get_contents("usuarios.json"), true);

$usuario_encontrado = null;

foreach ($usuarios as $usuario) {
  if ($usuario['correo'] === $correo && $usuario['password'] === $password) {
    $usuario_encontrado = $usuario;
    break;
  }
}

if ($usuario_encontrado) {
  $_SESSION['correo'] = $correo;
  header("Location: dashboard.php");
} else {
  echo "Correo o contraseña incorrectos. <a href='index.php'>Volver</a>";
}
?>
