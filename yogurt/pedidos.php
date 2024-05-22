<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos_pedidos.css">

    <link rel="shortcut icon" type="image/x-icon" href="img/ico.ico">
<?php /////////////////////////////b/////////////////////////// ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<?php //////////////////crud////////////////////////////////////// ?>

<?php
$con = mysqli_connect("localhost","root","root","mama_rosa") or die ("error");
?>  <!--////////////////////no guarda la cache//////////////////-->
    <meta http-equiv="Expires" content="0">

<meta http-equiv="Last-Modified" content="0">

<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">



<script type="text/javascript" src="js/intro.js"> </script>
    <!--////////////////////////////////////////////////////////-->
    <title>MAMÁ R'OSA</title>
  </head>
  <body>

    <STYLE>A {text-decoration: none;} a{ color: WHITE; } </STYLE>
    <header>
    <div class="menu">
      <nav>
        <ul>
          <!--<li>  <a href="#inicio">Inicio</a></li>-->

          <li> <a href="index.php">inicio</a> </li>
          <li>  <a href="sabores.php">Sabores</a></li>

        </ul>
      </nav>
    </div>
</header>
  <h2>♥Pedidos♥</h2>
<?php /////////////////////////////formulario///////////////////////// ?>
<article class="formulario">
<?php ////////////////////imagenes///////////////////////////////////////// ?>

<form action="pedidos.php" method="POST">

<div class="row row-cols-1 row-cols-md-2" style="max-width: 90%;">
  <div class="card alert-warning " >
    <img src="img/durazno1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Durazno</h5>
      <p>1 litro : $55</p><br><p>½ litro : $30</p>
      <label for="litro_d">Litro:</label>

      <input type="number" id="tentacles1" name="dlitro"
       min="0" max="100" placeholder="0" value="0">
       <label for="medio_d">Medio litro:</label>
       <input type="number" id="tentacles2" name="dmedio"
        min="0" max="100" placeholder="0" value="0">

    </div>
  </div>
  <div class="card alert-warning">
    <img src="img/fresa1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fresa</h5>
        <p>1 litro : $55</p><br><p>½ litro : $30</p>
      <label for="litro_f">Litro:</label>
      <input type="number" id="tentacles3" name="flitro"
       min="0" max="100" placeholder="0" value="0">
       <label for="medio_f">Medio litro:</label>
       <input type="number" id="tentacles4" name="fmedio"
        min="0" max="100" placeholder="0" value="0">

    </div>
  </div>
  <div class="card alert-warning">
    <img src="img/guayaba1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Guayaba</h5>
        <p>1 litro : $55</p><br><p>½ litro : $30</p>
      <label for="litro_g">Litro:</label>
      <input type="number" id="tentacles5" name="glitro"
       min="0" max="100" placeholder="0" value="0">
       <label for="medio_g">Medio litro:</label>
       <input type="number" id="tentacles6" name="gmedio"
        min="0" max="100" placeholder="0" value="0">

    </div>
  </div>
  <div class="card alert-warning">
    <img src="img/nuez1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nuez</h5>
        <p>1 litro : $55</p><br><p>½ litro : $30</p>
      <label for="litro_n">Litro:</label>
      <input type="number" id="tentacles7" name="nlitro"
       min="0" max="100" placeholder="0" value="0">
       <label for="medio_n">Medio litro:</label>
       <input type="number" id="tentacles8" name="nmedio"
        min="0" max="100" placeholder="0" value="0">

    </div>
  </div>

  <div class="card alert-warning">
    <img src="img/piña2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Piña</h5>
        <p>1 litro : $55</p><br><p>½ litro : $30</p>
      <label for="litro_d">Litro:</label>
      <input type="number" id="tentacles9" name="plitro"
       min="0" max="100" placeholder="0" value="0">
       <label for="medio_d">Medio litro:</label>
       <input type="number" id="tentacles10" name="pmedio"
        min="0" max="100" placeholder="0" value="0">

    </div>

  </div>
  <?php ////////////////////////////////////////suma//////////////////////// ?>
<p></p><p></p><p></p>
  <div class="card-body">

    <h5 class="card-title">Total del pedido</h5>
    <h6 class="card-subtitle mb-2 text-muted">Todos los precios son en moneda mexicana</h6>
  <label  id="lbResultado"></label>


<button type="button" class="btn btn-dark" value="Calcular" onclick="calcula_resta()"> confirmar compra</button>
  </div>

  <?php ////////////////////////////////////////////////////////////////////// ?>
</div>

<?php ////////////////////imagenes///////////////////////////////////////// ?>
  <label for="nombre">Nombre:</label>
  <input type="text"  placeholder="escribe tu nombre" required="required" name="nombre" >

  <label for="email">Correo electronico:</label>
  <input type="email"  placeholder="escribe tu correo" required="required" name="correo">

  <label for="direccion">Direccion</label>
  <input type="text"  placeholder="Direccion completa" required="required" name="dire">

  <label for="telefono">Telefono</label>
  <input type="tel"  placeholder="Telefono" required="required" name="telefono">

  <label>Horario que le gustaria la entrega:</label>
  <input type="time" name="hora" required="required"> <br>

  <label for="start">Fecha deseada:(♥minimo 5 dias habiles♥)</label>

<input type="date" id="start" name="fecha"
       value="<?php date(); ?>"
       min="2020-06-06" max="2030-12-31" required="required">

    <label for="mensaje">Referencias:</label>
    <textarea type="mensaje" name="referencias" placeholder="codigo postal,entre que calles,color de la fachada y/o lugares de referencias"></textarea>
<p class="nota"> <i> Por el momento solo se aceptan pagos en efectivo <br> ♥Gracias por su preferencia♥</i></p>
    <input type="submit" name="enviar"  value="enviar" >

</form>
<?php ////////////////////////////////////////agregar datos//////////////////////////////////////////////////////// ?>
<?php
if (isset($_POST['nombre'])) {
$dl = $_POST['dlitro'];
$dm = $_POST['dmedio'];

$fl = $_POST['flitro'];
$fm = $_POST['fmedio'];

$gl = $_POST['glitro'];
$gm = $_POST['gmedio'];

$nl = $_POST['nlitro'];
$nm = $_POST['nmedio'];

$pl = $_POST['plitro'];
$pm = $_POST['pmedio'];

$nom = $_POST['nombre'];
$correo = $_POST['correo'];
$direccion = $_POST['dire'];
$numero = $_POST['telefono'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$referencia = $_POST['referencias'];



$insert = "INSERT INTO pedidos(dlitro,dmedio,flitro,fmedio,glitro,gmedio,nlitro,nmedio,plitro,pmedio,nombre,correo,direccion,hora,fecha,referencia,numero)
VALUES('$dl','$dm','$fl','$fm','$gl','$gm','$nl','$nm','$pl','$pm','$nom','$correo','$direccion','$hora','$fecha','$referencia','$numero')";

$ejecutar = mysqli_query($con,$insert);
if ($ejecutar) {
  echo "pedido realizado";
  echo "<script>window.open('index.php','_self')</script>";

}echo "error";
}
 ?>
<?php//////////////////////////////////////////////////////// ////////////////////////////////////////////////////////////////////// ?>
</div>
</article>

<?php ////////////////////////////////////////////////////// ?>





<br>
<br><br>
<article class="pie">


<div>
  <font color="WHITE">Pagina diseñada por el Tec. Giovanny de Jesus Leon Martin (=BoXoR=)</font> <br><a href="tel:+525576353594" class="">
  <svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> Telefono:55-76-35-35-94.
</a>
<a href="mailto:boxor100@gmail.com" class="">
<svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
  <path d="M.05 3.555C.017 3.698 0 3.847 0 4v.697l5.803 3.546L0 11.801V12c0 .306.069.596.192.856l6.57-4.027L8 9.586l1.239-.757 6.57 4.027c.122-.26.191-.55.191-.856v-.2l-5.803-3.557L16 4.697V4c0-.153-.017-.302-.05-.445L8 8.414.05 3.555z"/>
</svg>
Correo:boxor100@gmail.com </a>
</div>

</article>
<?php /////////////////////////////////B//////////////////////////////////// ?>

<?php ////////////////////////////////////////////////////////////////////// ?>
  </body>
</html>
