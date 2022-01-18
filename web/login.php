<?PHP
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php include("header.php"); ?> 
<script src="https://apis.google.com/js/platform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<meta name="google-signin-client_id" content="107545177974-6kogvmg48u447a1ptcmn55rmh4hjo1d9.apps.googleusercontent.com">
<link rel="stylesheet" type="text/css" href="../css/loginStyle.css">
<head>
<script type="text/javascript" src="../js/google.js"></script>
    <style>
    
      h1{
        color: Black;
      }
      header{
    position:absolute;
    right: 0;
    top: 0;
    left: 0;
    background-color:  #67b5e9; 
    text-align: center;
    padding: 1rem;
}

    </style> 
</head>

<body>
<?php include 'DbConfig.php' ?>
<div>
<div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="email" id="dirCorreo" name="dirCorreo" placeholder="email" required="required" />
        <input type="password" id="pass1" name="pass1" placeholder="Password" required="required" />
        <input type="submit" id ="submit" value="Iniciar sesión" class="btn btn-primary btn-block btn-large"/>
    </form>
    <a href="register.php"style='text-align:center; color:white'>Registrarse</a>
    <div class="g-signin2" data-onsuccess="onSignIn" style="margin: auto;width: 100%;padding-left: 32%;"> <br> 

    <script>
      
   
      var google;

function onSignIn(googleUser) {

    var id_token = googleUser.getAuthResponse().id_token;
    $.post('GoogleLogin.php', {
        idtoken: id_token
    }).done(function(response) {
        auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function() {
            auth2.disconnect();
        });
        location.href = 'inicio.php';
    });
}
    </script>
  </div>
    </div>

    <div>

<?php
  
  if(isset($_REQUEST['dirCorreo'])) {
    $email = $_REQUEST['dirCorreo'];
    $pass1 = $_REQUEST['pass1'];
    $mysqli = mysqli_connect($server, $user, $pass, $basededatos);
    if(!$mysqli){
        die("Fallo al conectar con Mysql: ".mysqli_connect_error());
        echo "<span><a href='javascript:history.back()'>Volver</a></span>";
    }
    $sql = "SELECT * FROM users WHERE email=\"".$email."\";";
    $resultado = mysqli_query($mysqli, $sql, MYSQLI_USE_RESULT);
    if(!$resultado){
      die("Error: ".mysqli_error($mysqli));
      echo "<span><a href='javascript:history.back()'>Volver</a></span>";
    }
    $row = mysqli_fetch_array($resultado);
    print($row["Contraseña"]);
    if(!empty($row) && $row["Email"]==$email && password_verify($pass1,$row["Contraseña"])){ 
   

      // echo "<p class=\"success\">Inicio de sesion realizado correctamente<p><br/>";
      // echo "<span><a href='Layout.php'>Ir al inicio</a></span>"; 
      echo "<script> alert(\"¡Bienvenido!\");  </script>";
      $_SESSION['email'] = $email;
      echo "<script>window.location.href='inicio.php';</script>";
    } else {
      echo "<p class=\"error\">Usuario o contraseña incorrectos!<p><br/>";
      // echo "<span><a href=\"javascript:history.back()\">Volver</a></span>";
    }
  }
?>
</div>
  <?php include("footer.php"); ?> 
</body>

</html>