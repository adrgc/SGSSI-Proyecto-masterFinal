<?PHP
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php include("header.php");
    ?> 
    <link rel="stylesheet" type="text/css" href="../css/loginStyle.css">

<head>
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
	<h1>Registro</h1>
    <form method="post">
    	<input type="email" id="dirCorreo" name="dirCorreo" placeholder="email" required="required" />
        <input type="password" id="pass1" name="pass1" placeholder="Contraseña" required="required" />
        <input type="password" id="pass2" name="pass2" placeholder="Repite contraseña" required="required" />
        <input type="submit" id ="submit" value="Iniciar sesión" class="btn btn-primary btn-block btn-large"/>
    </form>

    </div>

    <div>

  <?php
    if(isset($_REQUEST['dirCorreo'])) {
      $mail = $_REQUEST['dirCorreo'];
      $pass1 = $_REQUEST['pass1'];
      $pass2 = $_REQUEST['pass2'];
        if($pass1 != $pass2) {
            echo "<p class=\"error\">¡Las contraseñas no coinciden!<p><br/>";
            // echo "<span><a href='javascript:history.back()'>Volver al formulario</a></span>";
        } else {
            $mysqli = mysqli_connect($server, $user, $pass, $basededatos);
            if (!$mysqli) {
                die("Fallo al conectar a MySQL: " . mysqli_connect_error());
                echo "<span><a href='javascript:history.back()'>Volver al formulario</a></span>";
            }
            $sql = "SELECT * FROM users WHERE email=\"".$mail."\";";
            $resultado = mysqli_query($mysqli, $sql, MYSQLI_USE_RESULT);
            while($row = mysqli_fetch_array($resultado)) {}  
            $row_cnt = $resultado->num_rows;
            print(strval($row_cnt));
            if($row_cnt >0){
              echo "<span><a href='javascript:history.back()'>Ya hay una cuenta con ese email</a></span>";
            }else{
            
            $pass = password_hash($pass1,PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(email, contraseña) VALUES ('$mail', '$pass');";
            if(!mysqli_query($mysqli, $sql)) {
                die("Fallo al insertar en la BD: " . mysqli_error($mysqli));
                echo "<span><a href='javascript:history.back()'>Volver al formulario</a></span>";
            } else {
                // echo "<p class=\"success\">Registrado correctamente<p><br/>";
                // echo "<span><a href='LogIn.php'>Log In</a></span>";
                echo "<script> alert(\"Registrado correctamente\"); document.location.href='login.php'; </script>";
            }
          }
            // Cerrar conexión
            mysqli_close($mysqli);
            // echo "Close OK.";
        }
    }

  ?>
</div>
  <?php include("footer.php"); ?> 
</body>

</html>