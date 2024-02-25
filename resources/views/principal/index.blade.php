<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ginecología y Obstetricia</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>
<body>
    <header class="header">
        <img src="img/nom_logo.png" alt="Logo" style="width: 300px; height: auto;">
        <nav class="nav">
            <ul class="nav-links">
                <li><a class="active" href="#">Inicio</a></li>
                <li><a href="http://localhost/proyectomedicina/public/sobre_nosotros">Sobre Nosotros</a></li>
                <li><a class="respli" href="http://localhost/proyectomedicina/public/contactanos">Contactanos</a></li>
            </ul>
        </nav>
        <div class="barrs">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <a class="btn" href="http://localhost/proyectomedicina/public/contactanos"><div class="button">Contactanos</div></a>
    </header>
    
    <section id="main-section">


        <div class="port">
            <img src="img/Sin título-pagprinc3.png">
        </div>
        <div class="presentacion"> 
            <div class="grid_cont_present">
                <div class="present_text">
                    <h1 class="present_titulo">¿quien me atendera?</h1>
                    <p class="present_descrip">¡Nos complace presentarte a nuestro destacado especialista en Ginecología y Obstetricia, el Dr. ..............! Con años de experiencia y un enfoque compasivo hacia cada paciente, el Dr. ........ se ha dedicado a brindar la más alta calidad de atención médica en el campo de la salud de la mujer.</p>
                </div>
                <div class="img_presentacion">
                    <img src="img/ejemplo doctor.jpg" alt="perfil_present">
                </div>
            </div>

        </div>
        <div class="panel_de_opciones">
            <div class="grid_cont_botonop">
                <div class="cont_botonindex">
                    <div class="contimgb">
                    <img class="imgb" src="img/embarazada.png" alt="">
                    </div>
                <h3>   control prenatal
                </h3></div>
                <div class="cont_botonindex">
                    <div class="contimgb">
                        <img class="imgb" src="img/colposcopio.png" alt="">
                        </div>
                    <h3>colposcopia</h3></div>
                <div class="cont_botonindex">
                    <div class="contimgb">
                        <img class="imgb" src="img/cancer-de-cuello-uterino.png" alt="">
                        </div>
                    <h3>papanicolao</h3></div>
                <div class="cont_botonindex">
                    <div class="contimgb">
                        <img class="imgb" src="img/familia.png" alt="">
                        </div><h3>planificacion familiar</h3></div>
                <div class="cont_botonindex">
                    <div class="contimgb">
                        <img class="imgb" src="img/menstruacion.png" alt="">
                        </div><h3>alteracion en la menstruacion</h3></div>
                <div class="cont_botonindex">
                    <div class="contimgb">
                        <img class="imgb" src="img/obstaculo.png" alt="">
                        </div><h3>menstruacion</h3></div>
            </div>
        </div>
       
        
<div class="container">
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Buscar...">
        <button id="searchButton">Buscar</button>
    </div>
    <h2>Últimas Publicaciones</h2>
    <div class="card-grid latest-posts"></div>

    <h2>Más Vistos</h2>
    <div class="card-grid most-viewed"></div>
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
    <script src="{{ asset('js/index.js') }}"></script>

</body>
</html>
