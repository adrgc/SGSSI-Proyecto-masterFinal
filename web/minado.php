<?PHP
if (!isset($_SESSION)) {
  session_start();
}
if(!isset($_SESSION['email'])){
  echo "<script>alert ('No puedes acceder aqui');</script>";
  echo "<script>window.location.href='inicio.php';</script>";
  exit(0);}

?>
<!DOCTYPE html>
<html>

<?php include("top.php"); ?>

<head>
    <link rel="stylesheet" type="text/css" href="../css/Style.css">
    <style>
      body {
        background-image: url("https://www.wallpapertip.com/wmimgs/66-666816_hd-web-background.jpg");
        background-size: 2050px 1080px;
      }
      h1{
        color: Black;
      }
    </style> 
</head>

<body>
    <?php include("header.php"); ?>
    <br>
    <?php include("missioncontrol.php"); ?>
    <label style="font-size:110%">Enlace de descarga Cliente:&nbsp</Label>
    <a style="font-size:110%; color:Green" href="https://drive.google.com/file/d/13zgVF78zk4D9wL238jcTEwvlA65jDWEh/view?usp=sharing">Descarga</a>
    <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <br>
    <label style="font-size:110%">Enlace de descarga Cliente (Archivos más grandes):&nbsp</Label>
    <a style="font-size:110%; color:Green" href="https://drive.google.com/file/d/1o2jEiU0QYVSb6vrh5FX9aSAGkwmNWA8w/view?usp=sharing">Descarga</a>
  <?php include("footer.php"); ?> 
</body>

</html>