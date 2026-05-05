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
            <div class="logos">
                <div class="logo-item">
                    <a href="https://www.up.ac.pa/" target="_blank">
                        <img src="assets/images/uni.png" alt="Logo Universidad de Panamá" title="Universidad de Panamá" class="logo-fiec">
                        <span>Universidad de Panamá</span>
                    </a>
                </div>
                <div class="logo-item">
                    <a href="https://fiec.up.ac.pa/" target="_blank">
                        <img src="assets/images/fiec.png" alt="Logo FIEC" title="Logo de la FIEC" class="logo-fiec">
                        <span>Facultad de Informática</span>
                    </a>
                </div>
                <div class="logo-item">
                    <a href="https://github.com/YassirBatista" target="_blank">
                        <img src="assets/images/github.png" alt="GitHub Yassir Batista" title="GitHub de Yassir" class="logo-fiec">
                        <span>GitHub Yassir Batista</span>
                    </a>
                </div>
            </div>
            <hr class="linea-gruesa">
        </section>

        <form action="procesar.php" method="POST">
            <table class="tabla-proforma">

                <!-- Area de login -->
                <tr class="fila-login">
                    <td colspan="2">Nombre Usuario: <input type="text" name="usuario" placeholder="usuario123"></td>
                    <td colspan="2">Password: <input type="password" name="pass" placeholder="••••••••"></td>
                </tr>

                <!-- Encabezado -->
                <tr>
                    <th colspan="4" class="gris-claro">GENERALES DEL ESTUDIANTE</th>
                </tr>

                <!-- Datos del Estudiante -->
                <tr>
                    <td>Nombre Estudiante:</td>
                    <td><input type="text" name="nombre" class="full" placeholder="Nombre completo"></td>
                    <td>Cédula de Identidad:</td>
                    <td><input type="text" name="cedula" class="full" placeholder="0-000-000"></td>
                </tr>
                <tr>
                    <td>Carrera:</td>
                    <td><input type="text" name="carrera" class="full" placeholder="Ingeniería Informática"></td>
                    <td>Año que cursa:</td>
                    <td><input type="text" name="anio" class="full" placeholder="1ro, 2do..."></td>
                </tr>

                <!-- Sexo y Tipo -->
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
                            󰮯 󰊠 󰊠 󰊠 󰊠 󰊠 󰊠 USO DE LA ADMINISTRACIÓN 󰮯 󰊠 󰊠 󰊠 󰊠 󰊠 󰊠
                        </marquee>
                    </td>
                </tr>

                <!-- Encabezado inferior -->
                <tr class="gris-claro">
                    <td>Tecnologías</td>
                    <td>Asignaturas Matriculadas</td>
                    <td colspan="2">Comentario</td>
                </tr>

                <!-- Selects, Checkboxes y Textarea -->
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
                        <textarea name="comentario" placeholder="Escribe aquí tus comentarios..."></textarea>
                    </td>
                </tr>

                <!-- Fecha de nacimiento y correo -->
                <tr>
                    <td>Fecha de Nacimiento:</td>
                    <td><input type="date" name="fecha" class="full"></td>
                    <td>Correo Electrónico:</td>
                    <td><input type="email" name="correo" class="full" placeholder="correo@ejemplo.com"></td>
                </tr>

                <!-- Video -->
                <tr>
                    <td colspan="4" class="celda-video">
                        <p>Video de las bases del desarrollo web</p>
                        <iframe class="video" width="480" height="270"
                            src="https://www.youtube-nocookie.com/embed/rWfditAgAfA"
                            frameborder="0" allowfullscreen></iframe>
                    </td>
                </tr>

                <!-- Botones -->
                <tr>
                    <td colspan="2" class="centro">
                        <button type="submit" class="btn btn-enviar">Enviar</button>
                    </td>
                    <td colspan="2" class="centro">
                        <button type="reset" class="btn btn-borrar">Borrar</button>
                    </td>
                </tr>

            </table>
        </form>

        <footer class="pie-firma">
            Este formulario fue elaborado por: Yassir Batista | 8-1027-1753 | Programación Web | 2026
        </footer>
    </div>

</body>
</html>