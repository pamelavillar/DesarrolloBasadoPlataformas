<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nacimiento = $_POST["nacimiento"];
    $ocupacion = $_POST["ocupacion"];
    $celular = $_POST["celular"];
    $nacionalidad = $_POST["nacionalidad"];
    $nivel_ingles = $_POST["nivel_ingles"];
    $programacion =  $programacion = $_POST["programacion"];
    $habilidades = $_POST["habilidades"];
    $aptitudes = $_POST["aptitudes"];
    $perfil = $_POST["perfil"];
    
    $file = 'datos.txt';
    $data = "Nombre: $nombre\nEmail: $email\ncelular: $celular\nMensaje: $ocupacion\n\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX); 

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
    
    exit; 
} else {
    echo "Error: No se recibieron datos.";
}


