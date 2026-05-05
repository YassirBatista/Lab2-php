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
$correo     = htmlspecialchars($_POST['correo']     ?? '');
$fecha      = htmlspecialchars($_POST['fecha']      ?? '');
$materias   = $_POST['mat'] ?? [];

$sexo_texto = $sexo === 'M' ? 'Mujer' : ($sexo === 'H' ? 'Hombre' : '-');
$tipo_texto = $tipo === 'R' ? 'Regular' : ($tipo === 'I' ? 'Irregular' : '-');
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

    <header class="encabezado-inst">
        <h1>Universidad de Panamá</h1>
        <h2>Facultad de Informática Electrónica y Comunicación</h2>
        <h3>Datos del Formulario</h3>
    </header>

    <hr class="linea-gruesa">

    <table class="tabla-proforma">
        <tr><th colspan="2" class="gris-claro">INFORMACIÓN DEL ESTUDIANTE</th></tr>
        <tr><th>Usuario</th><td><?= $usuario ?></td></tr>
        <tr><th>Nombre</th><td><?= $nombre ?></td></tr>
        <tr><th>Cédula</th><td><?= $cedula ?></td></tr>
        <tr><th>Carrera</th><td><?= $carrera ?></td></tr>
        <tr><th>Año que cursa</th><td><?= $anio ?></td></tr>
        <tr><th>Correo</th><td><?= $correo ?></td></tr>
        <tr><th>Fecha de Nacimiento</th><td><?= $fecha ?></td></tr>
        <tr><th colspan="2" class="gris-claro">OTROS DATOS</th></tr>
        <tr><th>Sexo</th><td><?= $sexo_texto ?></td></tr>
        <tr><th>Tipo</th><td><?= $tipo_texto ?></td></tr>
        <tr><th>Tecnología</th><td><?= $tech ?></td></tr>
        <tr><th>Materias</th><td><?= !empty($materias) ? implode(', ', array_map('htmlspecialchars', $materias)) : '-' ?></td></tr>
        <tr><th>Comentario</th><td><?= $comentario ?></td></tr>
    </table>

    <hr class="linea-gruesa">

    <footer class="pie-firma">
        <a href="index.php"><button class="btn btn-enviar">← Volver</button></a>
    </footer>

</div>
</body>
</html>