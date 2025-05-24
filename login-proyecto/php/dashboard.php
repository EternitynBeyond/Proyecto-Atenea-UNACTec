<?php
session_start();
if (!isset($_SESSION['correo'])) {
  header("Location: ../html/index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <div class="login-box">
    <h1>Bienvenido, <?php echo $_SESSION['correo']; ?>!</h1>
    <a href="logout.php">Cerrar sesión</a>
  </div>
</body>
</html>
