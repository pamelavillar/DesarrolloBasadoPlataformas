<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nacimiento = $_POST["nacimiento"];
    $ocupacion = $_POST["ocupacion"];
    $celular = $_POST["celular"];
    $nacionalidad = $_POST["nacionalidad"];
    $nivel_ingles = $_POST["nivel_ingles"];
    $programacion =  isset($_POST["programacion"])?implode(",", $_POST["programacion"]):'';
    $habilidades = isset($_POST["habilidades"])?implode(",",$_POST["habilidades"]):'';
    $aptitudes = $_POST["aptitudes"];
    $perfil = $_POST["perfil"];
    
    $file = 'datos.txt';
    $data = "Nombre: $name\nEmail: $email\ncelular: $celular\nMensaje: $ocupacion\n\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX); 


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
    $url .= http_build_query([ // Use http_build_query for arrays
      "name" => $name,
      "email" => $email,
      "nacimiento" => $nacimiento,
      "ocupacion" => $ocupacion,
      "celular" => $celular,
      "nacionalidad" => $nacionalidad,
      "nivel_ingles" => $nivel_ingles,
      "programacion" => $programacion, // Pass the entire array
      "aptitudes" => $aptitudes,
      "habilidades" => $habilidades, // Pass the entire array
      "perfil" => $perfil,
    ]);
  
    header("Location: $url");

    $conn->close();
    
    exit; 
} else {
    echo "Error: No se recibieron datos.";
}


