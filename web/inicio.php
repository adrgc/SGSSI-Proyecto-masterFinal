<?PHP
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html>

<?php include("top.php"); ?>

<head>
    <link rel="stylesheet" type="text/css" href="../css/Style.css">
</head>

<body>
    <?php include("header.php"); ?>

    <br/>
    <h1 style="font-size:300%">Minado de Bloques</h1>
    <br/>
    <div id="cuerpo">
      <div id="left">
        <br/>
          Todo el registro que conforma la cadena de bloques se encuentra compartido y distribuido a todos los nodos de la red, de forma que todos guardan una copia completa y actualizada de la cadena. Cada bloque generado se une a la cadena de bloques ya existente, enlazado con el anterior gracias a los mencionados apuntadores Hash, creando una sucesión de bloques inmutable al referirse cada uno a su bloque anterior.
          Aun así, dos bloques pueden generarse casi a la vez, y haber sido añadidos ambos a la cadena de bloques. 
        <br/>
          En este caso, aunque ambos bloques sean válidos, sólo uno puede formar parte de la cadena principal, de modo que los nodos continuarán la cadena a partir del bloque que se generase primero.
          En el sistema de Blockchain, los mineros tienen el rol de la creación de nuevos bloques y la verificación de los bloques añadidos a la cadena. 
        <br/>
          Por un lado, los mineros buscan encontrar el número mediante el cual resuelvan el bloque y encuentren el Hash correspondiente al mismo. Una vez solucionado, se notificará al resto de miembros de la red, que verificarán si el Hash obtenido es el correcto.
          De esta forma, se está dando a los mineros una labor de verificación de la cadena de bloques mediante consenso, al requerir que, al menos el 51% de los mineros de la red validen la veracidad del bloque. 
        <br/>  
          Esta labor es sencilla puesto que cada bloque inicia con el Hash correspondiente al bloque anterior y es sencillo comparar su coincidencia con los anteriores.
      </div>
      <div id="right">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/V9Kr2SujqHw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div id="bottom">
        <img src="https://www.bbva.ch/wp-content/uploads/2021/02/blockchain.png"/>
        <br>
      </div> 
    </div>

  <?php include("footer.php"); ?> 
</body>

</html>