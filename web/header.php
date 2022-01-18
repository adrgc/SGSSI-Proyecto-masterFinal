
<header>
    <div id="menu">
        <a href="inicio.php">Inicio</a>&nbsp;&nbsp;|&nbsp;&nbsp;    
        
        <?php
         if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        echo'<a href="minado.php">Minado</a>&nbsp;&nbsp;|&nbsp;&nbsp;';
        echo $email."&nbsp;&nbsp;";
        echo"<a href='logout.php'>Logout</a>";
        }else{
        echo'<a href="login.php">Login</a>';
        }
        ?>
        
    </div>
</header>