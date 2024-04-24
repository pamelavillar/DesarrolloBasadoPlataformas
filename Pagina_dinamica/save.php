<?php

$error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
      $error = true;
    } else if (!preg_match("/^[a-zA-Z-' ]*$/",($_POST["name"]))) {
      $error = true;
    } else {
      $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
      $error = true;
    } else if (!filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
      $error = true;
    } else {
      $email = $_POST["email"];
    }

    if (empty($_POST["nacimiento"])) {
      $error = true;
    } else {
      $nacimiento = $_POST["nacimiento"];
    }

    if (empty($_POST["ocupacion"])) {
      $error = true;
    } else {
      $ocupacion = $_POST["ocupacion"];
    }

    if (empty($_POST["celular"])) {
      $error = true;
    } elseif (!preg_match('/^\d{9}$/', ($_POST["celular"]))) {
      echo "El número de celular debe contener exactamente 9 números.";
    }else {
      $celular = $_POST["celular"];
    }

    if (empty($_POST["nacionalidad"])) {
      $error = true;
    } else {
      $nacionalidad = $_POST["nacionalidad"];
    }

    if (empty($_POST["nivel_ingles"])) {
      $error = true;
    } else {
      $nivel_ingles = $_POST["nivel_ingles"];
    }

    if (empty($_POST["programacion"])) {
      $error = true;
    } else {
      $programacion =  isset($_POST["programacion"])?implode(",", $_POST["programacion"]):'';
    }

    if (empty($_POST["habilidades"])) {
      $error = true;
    } else {
      $habilidades = isset($_POST["habilidades"])?implode(",",$_POST["habilidades"]):'';
    }
    
    if (empty($_POST["aptitudes"])) {
      $error = true;
    } else { 
      $aptitudes = $_POST["aptitudes"];
    }

    if (empty($_POST["perfil"])) {
      $error = true;
    } else {
      $perfil = $_POST["perfil"];
    }

    
    if ($error == true) {
      header("Location: register.php?error=complete_fields");
      exit; 
    }

    $puesto1 = $_POST["puesto1"];
    $ciudad1 = $_POST["ciudad1"];
    $periodo1 = $_POST["periodo1"];
    $funciones1 = $_POST["funciones1"];

    $puesto2 = $_POST["puesto2"];
    $ciudad2 = $_POST["ciudad2"];
    $periodo2 = $_POST["periodo2"];
    $funciones2 = $_POST["funciones2"];

    $puesto3 = $_POST["puesto3"];
    $ciudad3 = $_POST["ciudad3"];
    $periodo3 = $_POST["periodo3"];
    $funciones3 = $_POST["funciones3"];

    $formacion1 = $_POST["formacion1"];
    $ciudadA = $_POST["ciudadA"];
    $periodoA = $_POST["periodoA"];

    $formacion2 = $_POST["formacion2"];
    $ciudadB = $_POST["ciudadB"];
    $periodoB = $_POST["periodoB"];


    $conn = mysqli_connect("localhost","root","","usuarios") ;

    if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (nombre, email, nacimiento, ocupacion, celular, nacionalidad, nivel_ingles, programacion, habilidades, aptitudes, perfil) 
    VALUES ('$name', '$email', '$nacimiento', '$ocupacion', '$celular', '$nacionalidad', '$nivel_ingles', '$programacion', '$habilidades', '$aptitudes', '$perfil')";

    if ($conn->query($sql) === TRUE) {
      echo "Datos insertados correctamente";
    } else {
      echo "Error al insertar datos: " . $conn->error;
    }

    $url = "page.php?";
    $url .= http_build_query([ 
      "name" => $name,
      "email" => $email,
      "nacimiento" => $nacimiento,
      "ocupacion" => $ocupacion,
      "celular" => $celular,
      "nacionalidad" => $nacionalidad,
      "nivel_ingles" => $nivel_ingles,
      "programacion" => $programacion, 
      "aptitudes" => $aptitudes,
      "habilidades" => $habilidades, 
      "perfil" => $perfil,

      "puesto1" => $puesto1,
      "ciudad1" => $ciudad1,
      "periodo1" => $periodo1,
      "funciones1" => $funciones1,

      "puesto2" => $puesto2,
      "ciudad2" => $ciudad2,
      "periodo2" => $periodo2,
      "funciones2" => $funciones2,

      "puesto3" => $puesto3,
      "ciudad3" => $ciudad3,
      "periodo3" => $periodo3,
      "funciones3" => $funciones3,

      "formacion1" => $formacion1,
      "ciudadA" => $ciudadA,
      "periodoA" => $periodoA,

      "formacion2" => $formacion2,
      "ciudadB" => $ciudadB,
      "periodoB" => $periodoB,

    

    ]);
  
    header("Location: $url");

    $conn->close();
    
    exit; 
} else {
    echo "Error: No se recibieron datos.";
}


