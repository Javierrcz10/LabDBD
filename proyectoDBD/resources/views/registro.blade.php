<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Css only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
       
        <a href="/"><img src="https://cdn.pixabay.com/photo/2013/07/13/01/22/vegetables-155616_960_720.png" alt="" width="90" height="60" class="d-inline-block align-top me-1"></a>
            <a class="navbar-brand" href="/">Feria online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav position-absolute end-0">
                <a class="nav-link active end-0" aria-current="page" href="/inicioSesion">Iniciar Sesión</a>
                &nbsp &nbsp &nbsp
            </div>
            </div>
        </div>
        </nav>
        <figure class="text-center">
            <h1>
                Registro
            </h1>
        </figure>
        <figure class="text-center">
            <h4>
                Rellene el formulario

            </h4>

            <div class="container">
                <div class="row">
                  <div class="col-sm">
                     
                  </div>
                  <div class="col-sm">
                    <form action="{{route('usuarioStore')}}" method="POST">
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="nombreUsuario" placeholder="nombre">
                          <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="form-floating">
                          <input type="text" class="form-control" name="apodoUsuario" placeholder="User">
                          <label for="usuario">Apodo</label>
                        </div>
                      
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="emailUsuario" placeholder="name@example.com">
                          <label for="floatingPassword">Mail</label>
                        </div>
                        <div class="form-floating mb-3">
                        <input class="form-control" type="password" id="psw" name="contraseniaUsuario" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                          <label for="floatingPassword">contraseña</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" href="/">Registrar</button>
                      
                    </form>
                    <div id="message">
                      <h3>La contraseña debe contener</h3>
                      <p id="letter" class="invalid">Una letra en <b>minuscula</b> </p>
                      <p id="capital" class="invalid">Una letra en <b>mayuscula</b></p>
                      <p id="number" class="invalid">Un <b>numero</b></p>
                      <p id="length" class="invalid">Minimo <b>8 caracteres</b></p>
                    </div>
                  </div>

                  <div class="col-sm">
                    
                  </div>
                </div>
              </div>

           
        
    </body>
</html>

<style>
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: white;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>