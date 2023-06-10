<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Cálcular la mayor distancia a la que se observa un cuerpo</h2>
  <p>Descripción:</p>
  <p>¿Cuál es la mayor distancia a la que se puede observar un cuerpo celeste de magnitud absoluta −6 por un telescopio cuya magnitud límite es +23.5?  <br>
</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
      d=10(m-M+5/5) 
      o 
      d= 3×1014(m-M+5/5)<br>
</section>
<section class="datos">
<h2>Datos:</h2>
      m= +23.5 <br>
      M= -6

</section>
<section class="calculos">
<h2>Solución</h2>
   <p>La mayor distancia que se observa es:<br>
      m= +23.5 magnitud absoluta <br>
      M= -6 magnitud aparente</p>

</section>
<?php
     function calcula_distancia(){
        $m= 23.5;
        $M= -6;
        $distancia= 10 * ($m - $M + 5 / 5);
        return $distancia;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: La distancia es = ".calcula_distancia(). "  parsec</h1>";
?>
</section>
</section>
    <footer class="pie">
     SAHALLELY ESTUDILLO CABRERA 21090996
    </footer>
   </section>
</body>
</html>
