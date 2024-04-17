
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

          <header>Formulario</header>
            <form action="save.php" method="post">
                <div class="field input">
                    <label for="name">Nombres y Apellidos</label>
                    <input type="text" name="name" id="name" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="nacimiento" name="nacimiento" autocomplete="off" required>

                </div>

                <div class="field input">
                    <label for="ocupacion">Ocupacion</label>
                    <input type="text" name="ocupacion" id="ocupacion" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" id="celular" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="nacionalidad">Nacionalidad:</label>
                    <select id="nacionalidad" name="nacionalidad" autocomplete="off" required>
                        <option value="">Selecciona una nacionalidad</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="México">México</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Perú">Perú</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Venezuela">Venezuela</option>
                    </select>
                </div>

                <div class="field input">
                    <label for="basico" class="nivel-ingles">Básico</label>
                    <input type="radio" id="basico" name="nivel_ingles" value="basico" class="nivel-ingles">
                    
                    <label for="intermedio" class="nivel-ingles">Intermedio</label>
                    <input type="radio" id="intermedio" name="nivel_ingles" value="intermedio" class="nivel-ingles">
                    
                    <label for="avanzado" class="nivel-ingles">Avanzado</label>
                    <input type="radio" id="avanzado" name="nivel_ingles" value="avanzado" class="nivel-ingles">
                    
                    <label for="fluido" class="nivel-ingles">Fluido</label>
                    <input type="radio" id="fluido" name="nivel_ingles" value="fluido" class="nivel-ingles">
                </div>


                <div class="field input">
                    <label for="programacion">Lenguajes de programación:</label>
                    <select id="programacion" name="programacion[]" multiple>
                        <option value="Java">Java</option>
                        <option value="Python">Python</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="C++">C++</option>
                        <option value="C#">C#</option>
                        <option value="PHP">PHP</option>
                        <option value="Swift">Swift</option>
                        <option value="Kotlin">Kotlin</option>
                    </select>
                </div>

                <div class = "field input">
                    <label for="aptitudes">Aptitudes:</label>
                    <input type="text" id="aptitudes" name="aptitudes" list="lista_aptitudes" autocomplete="off">
                    <datalist id="lista_aptitudes">
                        <option value="Comunicación efectiva"></option>
                        <option value="Trabajo en equipo"></option>
                        <option value="Liderazgo"></option>
                        <option value="Resolución de problemas"></option>
                        <option value="Creatividad"></option>
                    </datalist>
                </div>


                <div class="field input">
                    <label>Habilidades:</label><br>

                    <label for="habilidad1">Comunicación efectiva</label>
                    <input type="checkbox" id="habilidad1" name="habilidades[]" value="Comunicación efectiva">
                    
                    <label for="habilidad2">Trabajo en equipo</label>
                    <input type="checkbox" id="habilidad2" name="habilidades[]" value="Trabajo en equipo">

                    <label for="habilidad3">Liderazgo</label>
                    <input type="checkbox" id="habilidad3" name="habilidades[]" value="Liderazgo">

                    <label for="habilidad4">Resolución de problemas</label>
                    <input type="checkbox" id="habilidad4" name="habilidades[]" value="Resolución de problemas">

                    <label for="habilidad5">Creatividad</label>
                    <input type="checkbox" id="habilidad5" name="habilidades[]" value="Creatividad">
                </div>

          
                <div class="field input">
                    <label for="perfil">Perfil</label>
                    <textarea id="perfil" name="perfil" rows="4" cols="50"></textarea>

                </div>

                <div class="field">
                    <button type="submit" class="btn" name="submit">Submit</button>
                </div>
                
            </form>
        </div>
      </div>
</body>
</html>