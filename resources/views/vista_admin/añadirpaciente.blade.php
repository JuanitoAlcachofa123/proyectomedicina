<!DOCTYPE html>
<html>
<head>
    <title>Registro de Pacientes</title>
    <link rel="stylesheet" href="{{ asset('css/añadirpaciente.css') }}">
</head>
<body>

    <header class="header">
        <img src="{{ asset('img/nom_logo.png') }}" alt="Logo" style="width: 300px; height: auto;">
        <nav class="nav">
            <ul class="nav-links">
                <li><a href="http://localhost/proyectomedicina/public/index">Inicio</a></li>
                <li><a href="http://localhost/proyectomedicina/public/sobre_nosotros">Sobre Nosotros</a></li>
                <li><a class="respli" href="http://localhost/proyectomedicina/public/contactanos">Contactanos</a></li>
                
            </ul>
        </nav>
        <div class="barrs">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <a class="btn" href="http://localhost/proyectomedicina/public/contactanos"><div class="button">Publicaciones</div></a>
        <a class="btn" href="http://localhost/proyectomedicina/public/admin/registro"><div class="button">Registros</div></a>
    </header>
    
    <section id="main-section">
        <div class="container">
            <h1>REGISTRO DE PACIENTES</h1>
            <div class="id-container">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" readonly value="123">
            </div>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
        
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno">
                
                <label for="celular">Procedencia:</label>
                <input type="text" id="Procedencia" name="Procedencia">

                <label for="celular">Celular:</label>
                <input type="tel" id="celular" name="celular" pattern="[0-9]{10}">
                
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
            
                <label for="Peso">Peso:</label>
                <input type="text" id="Peso" name="Peso">
                
                <label for="Residencia">Residencia:</label>
                <input type="text" id="Residencia" name="Residencia">

                <label for="grado_instruccion">grado de Instrucción:</label>
                <textarea id="grado_instruccion" name="grado_instruccion" rows="4"></textarea>

            </div>
            
            <div>

                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno">
                
                <label for="Ci">Carnet de indentidad:</label>
                <input type="tel" id="Ci" name="Ci" pattern="[0-9]{10}">
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                
                <label for="estado_civil">Estado Civil:</label>
                <select id="estado_civil" name="estado_civil">
                    <option value="soltero">Soltero</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="viudo">Viudo</option>
                </select>
                
                <label for="TipoSangre">Tipo de Sangre:</label>
                <input type="text" id="TipoSangre" name="TipoSangre">
                
                <label for="ocupacion">Ocupación Actual:</label>
                <input type="text" id="ocupacion" name="ocupacion">

                <label for="Talla">Talla:</label>
                <input type="text" id="Talla" name="Talla">    
                
                <label for="detalle">Detalle:</label>
                <textarea id="detalle" name="detalle" rows="4"></textarea>
            </div>

                <button type="submit">Registrar</button>
                <button type="button" onclick="window.location.href = 'http://localhost/proyectomedicina/public/admin/registro'">Salir</button>

            
            
        </div>
        
    </section>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d956.3253896039695!2d-68.12538353042213!3d-16.51086671320891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAv.%206%20de%20Agosto%20N%C2%BA%202548%20Edificio%20LA%20SANTE%205to%20Piso%200000!5e0!3m2!1ses-419!2sbo!4v1708490995168!5m2!1ses-419!2sbo" width="317" height="232" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </figure>
                <h2>NOS ENCONTRAMOS</h2>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=100083104093472&mibextid=ZbWKwL" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Correo:<br> hugalma@hotmail.com</p>
                <p>Direccion: <br>Av. 6 de Agosto Nº 2548 Edificio LA SANTE 5to Piso</p>
                <p>Numero telefonico:
                    <br> +59172046452
                </p>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2024 <b>ginecologiayobstetricia</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script src="index.js"></script>

    <!--
    <h1>REGISTRO DE PACIENTES</h1>
    <div class="id-container">
        <label for="id">ID:</label>
        <span id="id-value">1</span>
    </div>
    <form>
        <label for="id">ID:</label>
        <input type="text" id="id" name="id">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="apellido_paterno">Apellido Paterno:</label>
        <input type="text" id="apellido_paterno" name="apellido_paterno">
        <label for="apellido_materno">Apellido Materno:</label>
        <input type="text" id="apellido_materno" name="apellido_materno">
        <label for="ci">Carnet de Identidad:</label>
        <input type="text" id="ci" name="ci">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
        <label for="celular">Celular:</label>
        <input type="text" id="celular" name="celular">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="estado_civil">Estado Civil:</label>
        <select id="estado_civil" name="estado_civil">
            <option value="soltero">Soltero/a</option>
            <option value="casado">Casado/a</option>
            <option value="viudo">Viudo/a</option>
            <option value="divorciado">Divorciado/a</option>
        </select>
        <label for="ocupacion">Ocupación Actual:</label>
        <input type="text" id="ocupacion" name="ocupacion">
        <label for="grado_instruccion">Grado de Instrucción:</label>
        <input type="text" id="grado_instruccion" name="grado_instruccion">
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso">
        <label for="procedencia">Procedencia:</label>
        <input type="text" id="procedencia" name="procedencia">
        <label for="residencia">Residencia:</label>
        <input type="text" id="residencia" name="residencia">
        <label for="talla">Talla:</label>
        <input type="text" id="talla" name="talla">
        <label for="tipo_sangre">Tipo de Sangre:</label>
        <input type="text" id="tipo_sangre" name="tipo_sangre">
        <button type="submit">Registrar</button>
        <button type="button" id="btn-salir">Salir</button>
    </form>-->
</body>
</html>
