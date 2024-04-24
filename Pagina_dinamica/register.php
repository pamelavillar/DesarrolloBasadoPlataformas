
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

        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 'complete_fields') {
                echo "<script>alert('Por favor, complete todos los campos correctamente.');</script>";
            } 
        }
        ?>

          <header>Formulario</header>
          <form action="save.php" method="post" id="registration-form" name="myForm" >
                <div class="field input">
                    <label for="name">Nombres y Apellidos</label>
                    <input type="text" name="name" id="name" autocomplete="off" onblur="userNameCheck();">
                    <p id="name-error" class="error"></p> <!-- Este elemento es importante -->

                </div>

                <div class="field input">
                    <label for="nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="nacimiento" name="nacimiento" autocomplete="off" onblur="nacimientoCheck();" >
                    <p id="nacimiento-error" class="error"></p>

                </div>

                <div class="field input">
                    <label for="ocupacion">Ocupacion</label>
                    <input type="text" name="ocupacion" id="ocupacion" autocomplete="off" onblur="ocupacionCheck();">
                    <p id="ocupacion-error" class="error"></p>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off"   onblur="emailCheck();">
                    <p id ="email-error" class="error"></p>
                </div>

                <div class="field input">
                    <label for="celular">Celular</label>
                    <input type="text" name="celular" id="celular" autocomplete="off" onblur="celularCheck();">
                    <p id="celular-error" class="error"></p>
                </div>

                <div class="field input">
                    <label for="nacionalidad">Nacionalidad:</label>
                    <select id="nacionalidad" name="nacionalidad" autocomplete="off" onblur="nacionalidadCheck();">
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
                    <p id="nacionalidad-error" class="error"></p>
                </div>

                <div class="field input">
                    <label for="ingles">Nivel Ingles:</label>
                    <label for="basico" class="nivel-ingles">Básico</label>
                    <input type="radio" id="basico" name="nivel_ingles" value="basico" class="nivel-ingles" onblur="inglesCheck();">
                    
                    <label for="intermedio" class="nivel-ingles">Intermedio</label>
                    <input type="radio" id="intermedio" name="nivel_ingles" value="intermedio" class="nivel-ingles" onblur="inglesCheck();">
                    
                    <label for="avanzado" class="nivel-ingles">Avanzado</label>
                    <input type="radio" id="avanzado" name="nivel_ingles" value="avanzado" class="nivel-ingles" onblur="inglesCheck();">
                    
                    <label for="fluido" class="nivel-ingles">Fluido</label>
                    <input type="radio" id="fluido" name="nivel_ingles" value="fluido" class="nivel-ingles" onblur="inglesCheck();">
                </div>


                <div class="field input">
                    <label for="programacion">Lenguajes de programación:</label>
                    <select id="programacion" name="programacion[]" multiple onblur="programacionCheck();">
                        <option value="Java">Java</option>
                        <option value="Python">Python</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="C++">C++</option>
                        <option value="C#">C#</option>
                        <option value="PHP">PHP</option>
                        <option value="Swift">Swift</option>
                        <option value="Kotlin">Kotlin</option>
                    </select>
                    <p id="programacion-error" class="error"></p>
                </div>

                <div class = "field input">
                    <label for="aptitudes">Aptitudes:</label>
                    <input type="text" id="aptitudes" name="aptitudes" list="lista_aptitudes" autocomplete="off" onblur="aptitudesCheck();">
                    <datalist id="lista_aptitudes">
                        <option value="Creatividad"></option>
                        <option value="Empatía"></option>
                        <option value="Organización"></option>
                        <option value="Resiliencia"></option>
                    </datalist>
                    <p id="aptitudes-error" class="error"></p>
                </div>


                <div class="field input">
                    <label>Habilidades:</label><br>

                    <label for="habilidad1">Comunicación efectiva</label>
                    <input type="checkbox" id="habilidad1" name="habilidades[]" value="Comunicación efectiva" onblur = "habilidadesCheck();">
                    
                    <label for="habilidad2">Trabajo en equipo</label>
                    <input type="checkbox" id="habilidad2" name="habilidades[]" value="Trabajo en equipo" onblur = "habilidadesCheck();">

                    <label for="habilidad3">Pensamiento crítico</label>
                    <input type="checkbox" id="habilidad3" name="habilidades[]" value="Pensamiento crítico" onblur = "habilidadesCheck();">

                    <label for="habilidad4">Adaptabilidad</label>
                    <input type="checkbox" id="habilidad4" name="habilidades[]" value="Adaptabilidad" onblur = "habilidadesCheck();">

                    <label for="habilidad5">Resolución de problemas</label>
                    <input type="checkbox" id="habilidad5" name="habilidades[]" value="Resolución de problemas" onblur = "habilidadesCheck();" >

                    <p id="habilidades-error" class="error"></p>
                </div>

          
                <div class="field input">
                    <label for="perfil">Perfil</label>
                    <textarea id="perfil" name="perfil" rows="4" cols="50" onblur = "perfilCheck();"></textarea>
                    <p id="perfil-error" class="error"></p>
                </div>

                <div class="field input">
                    <h4>EXPERIENCIA LABORAL</h4>
                    <hr>

                    <div class="expBox">
                        <label for="puesto1">Puesto:</label>
                        <input type="text" id="puesto1" name="puesto1" required>

                        <label for="ciudad1">Ciudad:</label>
                        <input type="text" id="ciudad1" name="ciudad1" required>

                        <label for="periodo1">Periodo:</label>
                        <input type="text" id="periodo1" name="periodo1" required>

                        <label for="funciones1">Funciones:</label>
                        <textarea id="funciones1" name="funciones1" rows="4" cols="50" required></textarea>
                    </div>

                    <div class="expBox">
                        <label for="puesto2">Puesto:</label>
                        <input type="text" id="puesto2" name="puesto2" required>
                        <label for="ciudad2">Ciudad:</label>
                        <input type="text" id="ciudad2" name="ciudad2" required>
                        <label for="periodo2">Periodo:</label>
                        <input type="text" id="periodo2" name="periodo2" required>
                        <label for="funciones2">Funciones:</label>
                        <textarea id="funciones2" name="funciones2" rows="4" cols="50" required></textarea>
                    </div>

                    <div class="expBox">
                        <label for="puesto3">Puesto:</label>
                        <input type="text" id="puesto3" name="puesto3" required>
                        <label for="ciudad3">Ciudad:</label>
                        <input type="text" id="ciudad3" name="ciudad3" required>
                        <label for="periodo3">Periodo:</label>
                        <input type="text" id="periodo3" name="periodo3" required>
                        <label for="funciones3">Funciones:</label>
                        <textarea id="funciones3" name="funciones3" rows="4" cols="50" required></textarea>
                    </div>
                </div>


                <div class="field input">
                    <h4>FORMACION ACADEMICA</h4>
                    <hr>

                    <div class="expBox">
                        <label for="formacion1">Grado:</label>
                        <input type="text" id="formacion1" name="formacion1" required>

                        <label for="ciudadA">Ciudad:</label>
                        <input type="text" id="ciudadA" name="ciudadA" required>

                        <label for="periodoA">Periodo:</label>
                        <input type="text" id="periodoA" name="periodoA" required>
                    </div>

                    <div class="expBox">
                        <label for="formacion2">Grado:</label>
                        <input type="text" id="formacion2" name="formacion2" required>

                        <label for="ciudadB">Ciudad:</label>
                        <input type="text" id="ciudadB" name="ciudadB" required>

                        <label for="periodoB">Periodo:</label>
                        <input type="text" id="periodoB" name="periodoB" required>
                    </div>

                    

                </div>




                <div class="field">
                    <button type="submit" class="btn" name="submit">Submit</button>
                </div>
                
            </form>
        </div>
      </div>


    <script>
        var userNameCheck = function() {
            var nameError = document.getElementById('name-error');
            var nameValue = document.getElementById('name').value;
            var nameRegex = /^[a-zA-Z-' ]+$/;

            if(nameValue == ""){
                nameError.innerText = "Este campo es obligatorio";
                
            }else if (!nameRegex.test(nameValue)) {
                nameError.innerText = "El nombre solo puede contener letras, guiones, apóstrofes y espacios";
                
            }
            else{
                nameError.innerText = "";
                
            }
        }

        var emailCheck = function() {
            var emailError = document.getElementById('email-error');
            var emailValue = document.getElementById('email').value;
            var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

            if(emailValue == ""){
                emailError.innerText = "Este campo es obligatorio";
                
            }else if (!emailRegex.test(emailValue)) {
                emailError.innerText = "Email invalido";
                
            }
            else{
                emailError.innerText = "";
                
            }
        }

        var nacimientoCheck = function(){
            var nacimientoError = document.getElementById('nacimiento-error');
            var nacimientoValue = document.getElementById('nacimiento').value;
            
            if(nacimientoValue == ""){
                nacimientoError.innerText = "Este campo es obligatorio";
                
            }
            else{
                nacimientoError.innerText = ""; 
                
            }
        }

        var ocupacionCheck = function(){
            var ocupacionError = document.getElementById('ocupacion-error');
            var ocupacionValue = document.getElementById('ocupacion').value;
            
            if(ocupacionValue == ""){
                ocupacionError.innerText = "Este campo es obligatorio";
                
            }
            else{
                ocupacionError.innerText = ""; 
                
            }
        }

        var celularCheck = function(){
            var celularError = document.getElementById('celular-error');
            var celularValue = document.getElementById('celular').value;
            var celularRegex = /^\d{9}$/;
            
            if(celularValue == ""){
                celularError.innerText = "Este campo es obligatorio";
                
            } else if (!celularRegex.test(celularValue)) {
                celularError.innerText = "El celular debe contener exactamente 9 números";
            }else{
                celularError.innerText = ""; 
                
            }
        }
        var nacionalidadCheck = function(){
            var nacionalidadError = document.getElementById('nacionalidad-error');
            var nacionalidadValue = document.getElementById('nacionalidad').value;
            
            if(nacionalidadValue == ""){
                nacionalidadError.innerText = "Este campo es obligatorio";
                
            }
            else{
                nacionalidadError.innerText = ""; 
                
            }
        }

        var inglesCheck = function(){
            var inglesError = document.getElementById('ingles-error');
            var inglesValue = document.getElementById('ingles').value;
            
            if(inglesValue == ""){
                inglesError.innerText = "Este campo es obligatorio";
                
            }
            else{
                inglesError.innerText = ""; 
                
            }
        }

        var programacionCheck = function(){
            var programacionError = document.getElementById('programacion-error');
            var programacionValue = document.getElementById('programacion').value;
            
            if(programacionValue == ""){
                programacionError.innerText = "Este campo es obligatorio";
                
            }
            else{
                programacionError.innerText = ""; 
                
            }
        }

        var aptitudesCheck = function(){
            var aptitudesError = document.getElementById('aptitudes-error');
            var aptitudesValue = document.getElementById('aptitudes').value;
            
            if(aptitudesValue == ""){
                aptitudesError.innerText = "Este campo es obligatorio";
                
            }
            else{
                aptitudesError.innerText = ""; 
                
            }
        }

        var habilidadesCheck = function(){
            var checkboxes = document.querySelectorAll('input[type="checkbox"][name="habilidades[]"]');
            var errorElement = document.getElementById('habilidades-error');
            var checked = false;

            checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                checked = true;
            }
            });

            if (!checked) {
            errorElement.innerText = "Selecciona al menos una habilidad.";
             
            } else {
            errorElement.innerText = ""; 
             
            }
        }

        var perfilCheck = function(){
            var perfilError = document.getElementById('perfil-error');
            var perfilValue = document.getElementById('perfil').value;
            
            if(perfilValue == ""){
                perfilError.innerText = "Este campo es obligatorio";
                
            }
            else{
                perfilError.innerText = ""; 
                
            }
        }

    </script>

</body>

</html>