<?php $CURRENT_PAGE = "Registro"; ?>
<?php $PAGE_TITLE = "Registrarse"; ?>
<html>
<head>
  <?php include("includes/head-tag-contents.php");?>
  <?php include("db/registrarUsuario.php"); ?>
  <link rel="stylesheet" href="css/marcas/fichatecnica.css">
  <link rel="stylesheet" href="css/registro.css">

  <script src='https://www.google.com/recaptcha/api.js?render=6LfW4o0UAAAAAGzY6YfZAeBbqoJ1jIl15VxzgyIx'></script>
  <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfW4o0UAAAAAGzY6YfZAeBbqoJ1jIl15VxzgyIx', {action: 'action_name'})
            .then(function(token) {
            // Verifica el token en el servidor.
            });
        });
  </script>

</head>
<body>

<?php include("includes/navigation.php");?>

<!-- CONTENIDO -->

<body class="bg-light" id="page-top"><!--Modificado-->
  <div class="container bg-light">
    <section id="projects" class="projects-section bg-light">
    
    <!-- REGISTRO  -->
    
    
    <div class="row justify-content-center no-gutters mb-5 mb-lg-0 text-justify">
      <div class="col-lg-10 col-xl-9 mx-auto text-center">
      
        <div class="card card-signin flex-row my-5">
        <div class="card-img-left d-none d-md-flex">
            
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">Registrarse</h5>
            <p style="font-size: 12px;">Los campos con el símbolo (*) son obligatorios</p>
            <form action="" method="post" class="form-signin">
            <div class="form-label-group"> <!-- Email -->
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email *</label>
            </div>

            <div class="form-label-group"> <!-- Contraseña -->
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Contraseña *</label>
            </div>

            <hr>

            <div class="form-label-group"> <!-- Nombre -->
                <input type="text" name="inputName" id="inputName" class="form-control" placeholder="Name" required>
                <label for="inputName">Nombre *</label>
            </div>

            <div class="form-label-group"> <!-- Apellido 1 -->
                <input type="text" name="inputSurname1" id="inputSurname1" class="form-control" placeholder="Surname1" required>
                <label for="inputSurname1">Apellido 1 *</label>
            </div>

            <div class="form-label-group"> <!-- Apellido 2 -->
                <input type="text" name="inputSurname2" id="inputSurname2" class="form-control" placeholder="Surname2">
                <label for="inputSurname2">Apellido 2</label>
            </div>

            <div class="form-label-group"> <!-- Fecha de nacimiento -->
                <input type="date" name="inputDate" id="inputDate" class="form-control" placeholder="Date" required>
                <label for="inputDate">Fecha de nacimiento *</label>
            </div>
            
            <div class="form-label-group"> <!-- País -->
                <input type="text" name="inputCountry" id="inputCountry" class="form-control" placeholder="Country" required>
                <label for="inputCountry">País *</label>
            </div>

            <div class="form-label-group"> <!-- Código postal -->
                <input type="text" name="inputZipcode" id="inputZipcode" class="form-control" placeholder="Zipcode" required>
                <label for="inputZipcode">Código postal *</label>
            </div>

            <div class="form-label-group"> <!-- Teléfono -->
                <input type="text" name="inputMobile" id="inputMobile" class="form-control" placeholder="Mobile" required>
                <label for="inputMobile">Teléfono *</label>
            </div>

            <hr>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" name="registrarse" type="submit">Registrarse</button>

            <hr class="my-4">
            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit" disabled><i class="fab fa-google mr-2"></i> Iniciar sesión con Google</button>
            
            </form>
        </div>
        </div>
            
      </div>
      
    </div>
    </section>
  </div>
</body>

<?php include("includes/footer.php");?>

<?php include("includes/body-tag-contents.php");?>

</body>

</body>
</html>