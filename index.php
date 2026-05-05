<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Laboratorio N2 - Ingeniería Informática</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

    <div class="hoja">
        <header class="encabezado-inst">
            <h1>Universidad de Panamá</h1>
            <h2>Facultad de Informática Electrónica y Comunicación</h2>
            <h3>Licenciatura en Ingeniería Informática</h3>
            <h4>Programación Web</h4>
            <h4>Laboratorio N2</h4>
        </header>

        <section class="contenedor-logo">
            <hr class="linea-gruesa">
            <a href="https://www.up.ac.pa/">
                <img src="assets/images/fiec.png" alt="Logo FIEC" title="Logo de la Fiec" class="logo-fiec">
            </a>
            <hr class="linea-gruesa">
        </section>

        <form action="procesar.php" method="POST">
            <table class="tabla-proforma">
                <!-- Area de login -->
                <tr>
                    <td colspan="2">Nombre Usuario: <input type="text" name="usuario"></td>
                    <td colspan="2">Password: <input type="password" name="pass"></td>
                </tr>

                <!-- Encabezado -->
                <tr>
                    <th colspan="4" class="gris-claro">GENERALES DEL ESTUDIANTE</th>
                </tr>

                <!-- Datos del Estudiante -->
                <tr>
                    <td>Nombre Estudiante:</td>
                    <td><input type="text" name="nombre" class="full"></td>
                    <td>Cédula de Identidad:</td>
                    <td><input type="text" name="cedula" class="full"></td>
                </tr>
                <tr>
                    <td>Carrera:</td>
                    <td><input type="text" name="carrera" class="full"></td>
                    <td>Año que cursa:</td>
                    <td><input type="text" name="anio" class="full"></td>
                </tr>

                <!-- Seccion del sexo y tipo -->
                <tr>
                    <td colspan="2">
                        Sexo: 
                        Mujer <input type="radio" name="sexo" value="M"> 
                        Hombre <input type="radio" name="sexo" value="H">
                    </td>
                    <td colspan="2">
                        Tipo: 
                        Regular <input type="radio" name="tipo" value="R"> 
                        Irregular <input type="radio" name="tipo" value="I">
                    </td>
                </tr>

                <!-- Texto en movimiento -->
                <tr>
                    <td colspan="4" class="celda-movimiento">
                        <marquee behavior="scroll" direction="left">
                            ←———— USO DE LA ADMINISTRACIÓN ————→
                        </marquee>
                    </td>
                </tr>

                <!-- Encabezado Abajo -->
                <tr class="gris-claro">
                    <td>Tecnologías</td>
                    <td>Asignaturas Matriculadas</td>
                    <td colspan="2">Comentario</td>
                </tr>

                <!-- Caajas y Selects -->
                <tr>
                    <td>
                        Lenguaje favorito:<br><br>
                        <select name="tech">
                            <option value="c">C</option>
                            <option value="c++">C++</option>
                            <option value="java">Java</option>
                            <option value="prolog">Prolog</option>
                            <option value="python">Python</option>
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                        </select>
                    </td>
                    <td>
                        <input type="checkbox" name="mat[]" value="Web"> Programación Web I<br>
                        <input type="checkbox" name="mat[]" value="DB"> Base de Datos<br>
                        <input type="checkbox" name="mat[]" value="Data"> Estructura de Datos<br>
                        <input type="checkbox" name="mat[]" value="Der"> Derecho
                    </td>
                    <td colspan="2" class="celda-textarea">
                        Comentarios:<br>
                        <textarea name="comentario"></textarea>
                    </td>
                </tr>

                <!-- Video -->
                <tr>
                    <td colspan="4" class="celda-video">
                        <p>Video de las bases del desarrollo web</p>
                        <!--
                        <iframe class="video" width="480" height="270" src="https://www.youtube-nocookie.com/embed/TQPtgHVjMlo" frameborder="0" allowfullscreen></iframe>
                        -->
                        <iframe class="video" width="480" height="270" src="https://www.youtube-nocookie.com/embed/rWfditAgAfA" frameborder="0" allowfullscreen></iframe></td>
                </tr>

                <!-- Botones -->
                <tr>
                    <td colspan="2" class="centro"><button type="submit" class="btn">Enviar</button></td>
                    <td colspan="2" class="centro"><button type="reset" class="btn">Borrar</button></td>
                </tr>
            </table>
        </form>

        <footer class="pie-firma">
            Este formulario fue elaborado por: Yassir Batista
        </footer>
    </div>

</body>
</html>