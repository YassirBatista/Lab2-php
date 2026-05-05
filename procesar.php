<?php
// Recibir datos del formulario
$usuario   = htmlspecialchars($_POST['usuario']   ?? '');
$nombre    = htmlspecialchars($_POST['nombre']    ?? '');
$cedula    = htmlspecialchars($_POST['cedula']    ?? '');
$carrera   = htmlspecialchars($_POST['carrera']   ?? '');
$anio      = htmlspecialchars($_POST['anio']      ?? '');
$sexo      = htmlspecialchars($_POST['sexo']      ?? '');
$tipo      = htmlspecialchars($_POST['tipo']      ?? '');
$tech      = htmlspecialchars($_POST['tech']      ?? '');
$comentario = htmlspecialchars($_POST['comentario'] ?? '');
$materias  = $_POST['mat'] ?? [];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Recibidos</title>
    <style>
        body { background-color: #1a1a2e; font-family: Arial, sans-serif; display: flex; justify-content: center; padding: 40px; margin: 0; }
        .hoja { background: white; width: 700px; padding: 40px; border: 1px solid #000; box-shadow: 0 0 20px rgba(0,0,0,0.5); }
        h2 { text-align: center; border-bottom: 2px solid #000; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        td, th { border: 1px solid #000; padding: 10px; font-size: 0.95rem; }
        th { background-color: #eee; text-align: left; width: 35%; }
        .btn { display: block; margin: 20px auto 0; padding: 8px 30px; background: #fff; border: 1px solid #000; cursor: pointer; font-weight: bold; }
        .btn:hover { background: #f0f0f0; }
    </style>
</head>
<body>
<div class="hoja">
    <h2>Datos del Formulario</h2>
    <table>
        <tr><th>Usuario</th><td><?= $usuario ?></td></tr>
        <tr><th>Nombre</th><td><?= $nombre ?></td></tr>
        <tr><th>Cédula</th><td><?= $cedula ?></td></tr>
        <tr><th>Carrera</th><td><?= $carrera ?></td></tr>
        <tr><th>Año que cursa</th><td><?= $anio ?></td></tr>
        <tr><th>Sexo</th><td><?= $sexo === 'M' ? 'Mujer' : ($sexo === 'H' ? 'Hombre' : '-') ?></td></tr>
        <tr><th>Tipo</th><td><?= $tipo === 'R' ? 'Regular' : ($tipo === 'I' ? 'Irregular' : '-') ?></td></tr>
        <tr><th>Tecnología</th><td><?= $tech ?></td></tr>
        <tr><th>Materias</th><td><?= !empty($materias) ? implode(', ', array_map('htmlspecialchars', $materias)) : '-' ?></td></tr>
        <tr><th>Comentario</th><td><?= $comentario ?></td></tr>
    </table>
    <a href="index.php"><button class="btn">← Volver</button></a>
</div>
</body>
</html>