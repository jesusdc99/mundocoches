<?php $CURRENT_PAGE = "Registro"; ?>
<?php $PAGE_TITLE = "Registrarse"; ?>
<html>
<head>
  <?php include("includes/head-tag-contents.php");?>
  <?php include("db/registrarUsuario.php"); ?>
  <link rel="stylesheet" href="css/marcas/fichatecnica.css">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="css/captcha.css">
  <script src="js/registro.js"></script>
  <script src="https://apis.google.com/js/api:client.js"></script>
  
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

            <hr>

            <form action="" method="post" class="form-signin"  onsubmit="return checkform(this);">
            <div class="form-label-group"> <!-- Email -->
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" max="50" placeholder="Email address" required>
                <label for="inputEmail">Email *</label>
                <span id="campoOKemail"></span>
            </div>

            <div class="form-label-group"> <!-- Contraseña -->
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" max="50" placeholder="Password" required>
                <label for="inputPassword">Contraseña *</label>
                <span id="campoOKpass"></span><br>
                <span style="font-size: 12px;">La contraseña debe incluir al menos una minúscula,</span>
                <p style="font-size: 12px;">una mayúscula y uno de estos carácteres: [$%&€@!]</p>
            </div>

            <hr>

            <div class="form-label-group"> <!-- Nombre -->
                <input type="text" name="inputName" id="inputName" class="form-control" placeholder="Name" max="50" required>
                <label for="inputName">Nombre *</label>
            </div>

            <div class="form-label-group"> <!-- Apellido 1 -->
                <input type="text" name="inputSurname1" id="inputSurname1" class="form-control" max="50" placeholder="Surname1" required>
                <label for="inputSurname1">Apellido 1 *</label>
            </div>

            <div class="form-label-group"> <!-- Apellido 2 -->
                <input type="text" name="inputSurname2" id="inputSurname2" class="form-control" max="50" placeholder="Surname2">
                <label for="inputSurname2">Apellido 2</label>
            </div>

            <div class="form-label-group"> <!-- Fecha de nacimiento -->
                <input type="date" name="inputDate" id="inputDate" class="form-control" placeholder="Date" required>
                <label for="inputDate">Fecha de nacimiento *</label>
            </div>

            <div class="form-label-group"> <!-- País -->
                <select name="inputCountry" id="inputCountry" class="custom-select" placeholder="Country" required>
                    <option value="España">España</option>
                    <option value="Francia">Francia</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Otro">Otro</option>
                </select>
                <label for="inputCountry">País *</label>
            </div>

            <div class="form-label-group"> <!-- Código postal -->
                <input type="text" name="inputZipcode" id="inputZipcode" class="form-control" placeholder="Zipcode" max="5" required>
                <label for="inputZipcode">Código postal *</label>
            </div>

            <div class="form-label-group"> <!-- Teléfono -->
                <input type="text" name="inputMobile" id="inputMobile" class="form-control" placeholder="Mobile" max="12" required>
                <label for="inputMobile">Teléfono *</label>
            </div>

            <!-- <p><input required type="text" name="captcha" id="captcha" value="">
            <h6>INTRODUCE EL NÚMERO DE ABAJO</h6>
            <p><canvas id="myCanvas" width="200" height="60" style="border:1px solid #d3d3d3;">
            </canvas>
            <p> -->
           <!-- INICIO CAPTCHA -->
            <hr>
            <div class="capbox">

                <div id="CaptchaDiv"></div>

                <div class="capbox-inner">
                    Escriba el número de arriba:<br>
                    <input type="hidden" id="txtCaptcha">
                    <input type="text" name="CaptchaInput" id="CaptchaInput" size="20"><br>

                </div>
            </div>

            <br><hr>
            <!-- FIN CAPTCHA -->

            <button class="btn btn-lg btn-primary btn-block text-uppercase" id="btnregistrarse" name="registrarse" type="submit" disabled>Registrarse</button>

            <hr class="my-4">

            <!-- Div adquirido de Google para el Login
            <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
            <button class="btn btn-lg btn-google btn-block text-uppercase" type="button" id="googleSignInBtn"><i class="fab fa-google mr-2"></i> Registrarse con Google</button>

            </form>

            <!-- Boton de testeo para cerrar sesión con Google
            <button id="logoff" onclick="signOut()">Cerrar sesion</button>-->

            <script type="text/javascript">

                // Script para el captcha

                function checkform(theform) {

                    var why = "";

                    if(theform.CaptchaInput.value == "") {
                        why += "Por favor introduce el código CAPTCHA.\n";
                    }

                    if(theform.CaptchaInput.value != "") {

                        if(ValidCaptcha(theform.CaptchaInput.value) == false) {
                            why += "El código CAPTCHA no coincide.\n";
                        }
                    }

                    if(why != "") {
                    alert(why);
                    return false;
                    }
                }

                var a = Math.ceil(Math.random() * 9)+ '';
                var b = Math.ceil(Math.random() * 9)+ '';
                var c = Math.ceil(Math.random() * 9)+ '';
                var d = Math.ceil(Math.random() * 9)+ '';
                var e = Math.ceil(Math.random() * 9)+ '';

                var code = a + b + c + d + e;

                document.getElementById("txtCaptcha").value = code;
                document.getElementById("CaptchaDiv").innerHTML = code;

                // Valida la entrada con el número generado
                function ValidCaptcha() {

                    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
                    var str2 = removeSpaces(document.getElementById('CaptchaInput').value);

                    if (str1 == str2) {
                        return true;
                    }else{
                        return false;
                    }
                }

                // Elimina los espacios del código introducido y generado
                function removeSpaces(string) {

                    return string.split(' ').join('');
                }

            </script>

        </div>
        </div>
            
      </div>
      
    </div>
    </section>
  </div>

<!-- Modal -->
<div class="modal fade" id="modalComentario">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
      
        <!-- Contenido del modal -->
        <div class="modal-body text-center">
          <span id="modalComentarioMensaje" class="h6"></span>
        </div>
        
        <!-- Pie del modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- Script para activar el modal al registrarse correctamente --> 
  <?php if(isset($show_modal) && $show_modal){ ?>
        <script>
            $("#modalComentarioMensaje").text("Te has registrado correctamente.");
            $("#modalComentario").modal();;    
        </script>
    <?php } ?>
    <script type="text/javascript" src="google-signin.js"></script>
  
    



<?php include("includes/footer.php");?>

<?php include("includes/body-tag-contents.php");?>


</body>
</html>