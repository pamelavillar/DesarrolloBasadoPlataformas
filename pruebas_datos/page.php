<!DOCTYPE html>
<html lang="en">
<head>
    <title>mi cv</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class = "container">
        <div class = "top">
            <div class="group">
                <div class="photo">
                    <a href="#" title="Ir a mi perfil">
                        <img
                                class="foto-perfil"
                                src="https://media.licdn.com/dms/image/D4E03AQEwC0g6Xjao6g/profile-displayphoto-shrink_200_200/0/1699642117258?e=2147483647&v=beta&t=3nUly3rKNqcOL7lsOI0gWh0qxKHrXtnkSjFDgF8zG2Q"
                                alt="foto de perfil"
                                height="180"
                                width="180"
                        >
                    </a> 
                </div>
                <div class="profile">
                    <h1><?php echo $_GET['name']; ?><br><span><?php echo $_GET['ocupacion']; ?></span></h1>
                </div>
            </div>
            
        </div>
        <div class = "bottom">
            <div class = "left_side">
                <h4>CONTACTO</h4>
                <hr>
                <ul class = "contactInfo">
                    <li>
                        <span class = "icon"><i class="fa-solid fa-phone"></i></span>
                        <span class = "text"><?php echo $_GET['celular']; ?></span>
                    </li>
                    <li>
                        <span class = "icon"><i class="fa-solid fa-envelope"></i></span>
                        <span class = "text"><?php echo $_GET['email']; ?></span>
                    </li>
                    <li>
                        <span class = "icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class = "text"><?php echo $_GET['nacionalidad']; ?></span>
                    </li>
                    <li>
                        <span class = "icon"><i class="fa-solid fa-calendar"></i></span>
                        <span class = "text"><?php echo $_GET['nacimiento']; ?></span>
                    </li>
                </ul>

                <h4>IDIOMAS</h4>
                <hr>
                <ul class = "idiomas">
                    <li class = "text"> Español: Nativo</li>
                    <li class = "text"> Ingles: <?php echo $_GET['nivel_ingles']; ?></li>    
                    <li class = "text"> Frances: Intermedio B1</li>
                </ul>

                <h4>APTITUDES</h4>
                <hr>
                <ul class = "aptitudes">
                    <li class = "text"> Adobe Photoshop - Illustrator - Premiere</li>
                    <li class = "text"> Microsoft Office </li>    
                    <li class = "text"> Gestión del tiempo</li>
                    <li class = "text"> Trabajo en equipo</li>
                    <li class = "text"> Optimización de redes sociales</li>
                </ul>

                <h4>HABILIDADES</h4>
                <hr>
                <ul class = "habilidades">
                    <?php
                    if (isset($_GET['habilidades'])) {
                        $habilidades = $_GET['habilidades'];
                        foreach ($habilidades as $seleccion) {
                        echo "<li class='text'>$seleccion</li>";
                        }
                    }
                    ?>
                </ul>

                <h4>LENGUAJES DE PROGRAMACION</h4>
                <hr>
                <ul class = "intereses">
                    <?php
                    if (isset($_GET['programacion'])) {
                        $programacion = $_GET['programacion'];
                        foreach ($programacion as $seleccion) {
                        echo "<li class='text'>$seleccion</li>";
                        }
                    }
                    ?>
                </ul>
            </div>

            <div class = "right_side">
                <h4>PERFIL</h4>
                <hr>
                <div class = "perfil">
                    <p class = "text"><?php echo $_GET['perfil']; ?>
                    </p>
                </div>

                <h4>EXPERIENCIA LABORAL</h4>
                <hr>
                <div class="expeLaboral">
                    <div class = "expBox">
                        <h5>Trabajador Social</h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad">Mexico DF</span>, | <span class="periodo">2020-2022</span>
                        </div>
                        <ul class="funciones">
                            <li class = "text">Participé activamente en la evaluación de las necesidades individuales, familiares y comunitarias de nuestros clientes.</li>
                            <li class = "text">Trabajé en estrecha colaboración con otros profesionales y organizaciones para coordinar la provisión de servicios integrales que abordaran las necesidades de nuestros clientes.</li>
                            <li class = "text"> Participé en actividades de educación y sensibilización comunitaria para aumentar la conciencia sobre temas sociales importantes. </li>
                        </ul>
                    </div>

                    <div class = "expBox">
                        <h5>Trabajador Social</h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad">Mexico DF</span>, | <span class="periodo">2020-2022</span>
                        </div>
                        <ul class="funciones">
                            <li class = "text">Participé activamente en la evaluación de las necesidades individuales, familiares y comunitarias de nuestros clientes.</li>
                            <li class = "text">Trabajé en estrecha colaboración con otros profesionales y organizaciones para coordinar la provisión de servicios integrales que abordaran las necesidades de nuestros clientes.</li>
                        </ul>
                    </div>

                    <div class = "expBox">
                        <h5>Trabajador Social</h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad">Mexico DF</span>, | <span class="periodo">2020-2022</span>
                        </div>
                        <ul class="funciones">
                            <li class = "text">Impartí clases magistrales y prácticas educativas para promover el aprendizaje activo de los estudiantes.</li>
                            <li class = "text">Diseñé planes de estudio y evaluaciones adaptadas a las necesidades de aprendizaje de cada grupo.</li>
                            <li class = "text">Fomenté la participación y el trabajo en equipo entre los estudiantes para mejorar su comprensión y retención de los contenidos.</li>
                        </ul>
                    </div>
                    
                </div>

                <h4>FORMACION</h4>
                <hr>
                <div class="formacion">
                    <div class = "forBox">
                        <h5>Grado de Trabajo Social</h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad">Esma,Madrid</span>, | <span class="periodo">2012-2015</span>
                        </div>
                    </div>

                    <div class = "forBox">
                        <h5>Licenciatura Profesional</h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad">Universidad de la Frontera, Mexico DF</span>, | <span class="periodo">2011-2012</span>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>


    
</body>