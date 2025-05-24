<?php
session_start();

$correo = $_POST['correo'] ?? '';
$password = $_POST['password'] ?? '';

$usuarios = json_decode(file_get_contents("../usuarios.json"), true);

$valido = false;

foreach ($usuarios as $usuario) {
  if ($usuario['correo'] === $correo && $usuario['password'] === $password) {
    $valido = true;
    $_SESSION['correo'] = $correo;
    break;
  }
}

if ($valido) {
  header("Location: ../php/dashboard.php");
  exit();
} else {
  echo "<script>alert('Correo o contraseña incorrectos');window.location.href='../html/index.html';</script>";
}
