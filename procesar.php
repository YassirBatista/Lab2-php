<?php
$usuario    = htmlspecialchars($_POST['usuario']    ?? '');
$nombre     = htmlspecialchars($_POST['nombre']     ?? '');
$cedula     = htmlspecialchars($_POST['cedula']     ?? '');
$carrera    = htmlspecialchars($_POST['carrera']    ?? '');
$anio       = htmlspecialchars($_POST['anio']       ?? '');
$sexo       = htmlspecialchars($_POST['sexo']       ?? '');
$tipo       = htmlspecialchars($_POST['tipo']       ?? '');
$tech       = htmlspecialchars($_POST['tech']       ?? '');
$comentario = htmlspecialchars($_POST['comentario'] ?? '');
$materias   = $_POST['mat'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Recibidos</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
<div class="hoja">
    <h2>Datos del Formulario</h2>
    <table class="tabla-proforma">
        <tr><th>Usuario</th><td><?= $usuario ?></td></tr>
        <tr><th>Nombre</th><td><?= $nombre ?></td></tr>
        <tr><th>Cédula</th><td><?= $cedula ?></td></tr>
        <tr><th>Carrera</th><td><?= $carrera ?></td></tr>
        <tr><th>Año que cursa</th><td><?= $anio ?></td></tr>
        <tr><th>Sexo</th><td><?= $sexo ?></td></tr>
        <tr><th>Tipo</th><td><?= $tipo ?></td></tr>
        <tr><th>Tecnología</th><td><?= $tech ?></td></tr>
        <tr><th>Materias</th><td><?= implode(', ', $materias) ?></td></tr>
        <tr><th>Comentario</th><td><?= $comentario ?></td></tr>
    </table>
    <br>
    <a href="index.php"><button class="btn">← Volver</button></a>
</div>
</body>
</html>