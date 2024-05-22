<?php
$con = mysqli_connect("localhost","root","root","mama_rosa") or die ("error");
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/ico.ico">
<?php /////////////////////////////b/////////////////////////// ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<?php //////////////////////////////////////////////////////// ?>

    <!--////////////////////no guarda la cache//////////////////-->
    <meta http-equiv="Expires" content="0">

<meta http-equiv="Last-Modified" content="0">

<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
    <!--////////////////////////////////////////////////////////-->
    <title>MAMÁ R'OSA</title>
  </head>
  <body>
    <header>
    <div class="menu">
      <nav>
        <ul>
          <!--<li>  <a href="#inicio">Inicio</a></li>-->


          <li>  <a href="sabores.php">Sabores</a></li>
          <li> <a href="pedidos.php">Pedidos</a> </li>
          <li> <a href="#blog">Blog</a> </li>
          <?php //<li> <a href="recepcion.php">recepcion</a> </li>  ?>
        </ul>
      </nav>
    </div>
</header>
<?php /////////////////////////////carrusel///////////////////////// ?>
<div class="cuerpo">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/nosotros.png" class="d-block w-100" alt="..." width="100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="img/logo.png" class="d-block w-100" alt="..." width="100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="img/sabores.png" class="d-block w-100" alt="..." width="100%" height="400px">
      </div>
      <div class="carousel-item">
        <img src="img/entrega.png" class="d-block w-100" alt="..." width="100%" height="400px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>





</div>
<br>
<br>
<br><br><br><br>
<?php /////////////////////////////carrusel///////////////////////// ?>
<a name="blog"></a>
<center><h3 style="font-size:60px;">Blog MAMÁ R'OSA</h3></center>
<div class="row row-cols-1 row-cols-md-3" style="padding-top:30px;">
  <?php
  $consulta = "SELECT * FROM metro";
  $ejecutar = mysqli_query($con,$consulta);
  $i = 0;
  while ($fila = mysqli_fetch_array($ejecutar)) {
  $id = $fila['id_imagen'];
  $titulo = $fila['titulo'];
  $img = $fila['img'];
  $cont = $fila['cont'];

  $i ++;

   ?>
  <div class="col mb-4">
    <div class="card h-100">

      <img width="30px"class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($fila['img']); ?>"/>
      <div class="card-body">
        <h5 class="card-title"> <?php echo $titulo ?> </h5>
        <p class="card-text"> <?php echo $cont ?> </p>
      </div>
    </div>
  </div>
  <?php } ?>
</div>





<?php ///////////////////////////////////////////////////// ?>
<br>
<br><br>
<div class="p-3 mb-2 bg-dark text-white text-decoration-none text-center " >
  Pagina diseñada por el Tec. Giovanny de Jesus Leon Martin (=BoXoR=) <br><a href="tel:+525576353594" class="text-decoration-none text-reset">
  <svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> Telefono:55-76-35-35-94.
</a>
<a href="mailto:boxor100@gmail.com" class="text-decoration-none text-reset">
<svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 3H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
  <path d="M.05 3.555C.017 3.698 0 3.847 0 4v.697l5.803 3.546L0 11.801V12c0 .306.069.596.192.856l6.57-4.027L8 9.586l1.239-.757 6.57 4.027c.122-.26.191-.55.191-.856v-.2l-5.803-3.557L16 4.697V4c0-.153-.017-.302-.05-.445L8 8.414.05 3.555z"/>
</svg>
Correo:boxor100@gmail.com </a>
</div>
<?php /////////////////////////////////B//////////////////////////////////// ?>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<?php ////////////////////////////////////////////////////////////////////// ?>
  </body>
</html>
