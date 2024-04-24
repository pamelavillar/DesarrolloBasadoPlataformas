<?php
// Obtener los valores de programacion y habilidades de la URL y convertirlos de nuevo en arrays
$programacion = isset($_GET["programacion"]) ? explode(",", $_GET["programacion"]) : [];
$habilidades = isset($_GET["habilidades"]) ? explode(",", $_GET["habilidades"]) : [];
?>

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
                    <li class = "text"><?php echo $_GET['aptitudes'];?></li>
                    
                </ul>

                <h4>HABILIDADES</h4>
                <hr>
                <ul class = "habilidades">
                    <?php
                    foreach ($habilidades as $seleccion) {
                        echo "<li class='text'>$seleccion</li>";
                    }
                    ?>
                </ul>

                <h4>LENGUAJES DE PROGRAMACION</h4>
                <hr>
                <ul class = "intereses">
                    <?php
                        foreach ($programacion as $seleccion) {
                            echo "<li class='text'>$seleccion</li>";
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
                        <h5><?php echo $_GET['puesto1'];?></h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad"><?php echo $_GET['ciudad1'];?></span>, | <span class="periodo"><?php echo $_GET['periodo1'];?></span>
                        </div>
                        <ul class="funciones">
                            <li class = "text"><?php echo $_GET['funciones1'];?></li>
                            <li class = "text">Trabajé en estrecha colaboración con otros profesionales y organizaciones para coordinar la provisión de servicios integrales que abordaran las necesidades de nuestros clientes.</li>
                            <li class = "text"> Participé en actividades de educación y sensibilización comunitaria para aumentar la conciencia sobre temas sociales importantes. </li>
                        </ul>
                    </div>

                    <div class = "expBox">
                        <h5><?php echo $_GET['puesto2'];?></h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad"><?php echo $_GET['ciudad2'];?></span>, | <span class="periodo"><?php echo $_GET['periodo2'];?></span>
                        </div>
                        <ul class="funciones">
                            <li class = "text"><?php echo $_GET['funciones2'];?></li>
                            <li class = "text">Trabajé en estrecha colaboración con otros profesionales y organizaciones para coordinar la provisión de servicios integrales que abordaran las necesidades de nuestros clientes.</li>
                        </ul>
                    </div>

                    <div class = "expBox">
                        <h5><?php echo $_GET['puesto3'];?></h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad"><?php echo $_GET['ciudad3'];?></span>, | <span class="periodo"><?php echo $_GET['periodo3'];?></span>
                        </div>
                        <ul class="funciones">
                            <li class = "text"><?php echo $_GET['funciones3'];?></li>
                            <li class = "text">Diseñé planes de estudio y evaluaciones adaptadas a las necesidades de aprendizaje de cada grupo.</li>
                            <li class = "text">Fomenté la participación y el trabajo en equipo entre los estudiantes para mejorar su comprensión y retención de los contenidos.</li>
                        </ul>
                    </div>
                    
                </div>

                <h4>FORMACION</h4>
                <hr>
                <div class="formacion">
                    <div class = "forBox">
                        <h5><?php echo $_GET['formacion1'];?></h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad"><?php echo $_GET['ciudadA'];?></span>, | <span class="periodo"><?php echo $_GET['periodoA'];?></span>
                        </div>
                    </div>

                    <div class = "forBox">
                        <h5><?php echo $_GET['formacion2'];?></h5>
                        <div class = "fecha_ubicacion">
                            <span class="ciudad"><?php echo $_GET['ciudadB'];?></span>, | <span class="periodo"><?php echo $_GET['periodoB'];?></span>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>


    
</body>