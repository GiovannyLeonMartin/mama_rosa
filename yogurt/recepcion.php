
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/estilos_pedidos.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/ico.ico">
<?php /////////////////////////////b/////////////////////////// ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<?php //////////////////crud////////////////////////////////////// ?>
<!---para que se actualice solo----------------------------------->
<script> var timer = null;
function auto_reload()
{
 top.location.href = 'recepcion.php';
} </script>  <body onload="timer = setTimeout('auto_reload()',50000);">
  <!------------------------------------------------------------>

<?php
$con = mysqli_connect("localhost","root","root","mama_rosa") or die ("error");
?>
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

    <STYLE>A {text-decoration: none;} a{ color: WHITE; } </STYLE>
    <header>
    <div class="menu">
      <nav>
        <ul>
          <!--<li>  <a href="#inicio">Inicio</a></li>-->

          <li> <a href="index.php">inicio</a> </li>
          <li> <a href="blog.php">blog</a> </li>


        </ul>
      </nav>
    </div>
</header>
  <h2>♥Pedidos♥</h2>
<?php /////////////////////////////formulario///////////////////////// ?>

  <div class="table-responsive-sm">
    <table class="table table-dark">
    <thead>
      <tr>
        <th>n_pedido</th>
        <th>nombre</th>
        <th>d_l</th>
        <th>d_m</th>
        <th>f_l</th>
        <th>f_m</th>
        <th>g_l</th>
        <th>g_m</th>
        <th>n_l</th>
        <th>n_m</th>
        <th>p_l</th>
        <th>p_m</th>
        <th>p_r</th>
      </tr>
      </thead>
      <?php
    $consulta = "SELECT * FROM pedidos";
    $ejecutar = mysqli_query($con,$consulta);
    $i = 0;
    while ($fila = mysqli_fetch_array($ejecutar)) {
      $id = $fila['id'];
      $nombre = $fila['nombre'];
      $correo = $fila['correo'];
      $telefono = $fila['telefono'];
      $direccion = $fila['direccion'];
      $hora = $fila['hora'];
      $fecha = $fila['fecha'];
      $referencia = $fila['referencia'];
      $dlitro = $fila['dlitro'];
      $dmedio = $fila['dmedio'];
      $flitro = $fila['flitro'];
      $fmedio = $fila['fmedio'];
      $glitro = $fila['glitro'];
      $gmedio = $fila['gmedio'];
      $nlitro = $fila['nlitro'];
      $nmedio = $fila['nmedio'];
      $plitro = $fila['plitro'];
      $pmedio = $fila['pmedio'];
      $i ++;

       ?>
    <tbody>


       <tr align="center">
          <td><?php echo $id; ?></td>
         <td><?php echo $nombre; ?></td>
         <td><?php echo $dlitro; ?></td>
          <td><?php echo $dmedio; ?></td>
          <td><?php echo $flitro; ?></td>
          <td><?php echo $fmedio; ?></td>
          <td><?php echo $glitro; ?></td>
          <td><?php echo $gmedio; ?></td>
          <td><?php echo $nlitro; ?></td>
          <td><?php echo $nmedio; ?></td>
          <td><?php echo $plitro; ?></td>
          <td><?php echo $pmedio; ?></td>
         <td><a href="recepcion.php?borrar=<?php echo $id; ?>"> <img src="img/corazon.svg" width="50px"alt="" title="pedido realizado">  </a> </td>

       </tr>
     <?php } ?>
     </tbody>
    </table>

  </div>
<?php
  if (isset($_GET['borrar'])) {

  $borrar_id = $_GET['borrar'];
  $borrar = "DELETE FROM pedidos WHERE id ='$borrar_id'";
  $ejecutar = mysqli_query($con,$borrar);
  if ($ejecutar) {
    echo "<script>alert('Pedido realizado')</script>";
    echo "<script>window.open('recepcion.php','_self')</script>";
  }
  }

 ?>
<?php ////////////////////////////////////////////////////// ?>
<center>
<a href="imprimir.php"> <img src="img/imprimir.png" alt="" width="60px" title="Imprimir pedidos"> </a>

</center>
<?php ////////////////////////////////////////////////////////// ?>
<article class="nomenclatura">
  <table class="table">
  <thead>
    <tr>
      <th scope="col"class="table-dark">clave</th>
      <th scope="col"class="table-dark">nombre</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"class="table-primary">d_l</th>
      <td class="table-primary">durazno litro</td>

    </tr>
    <tr>
      <th scope="row" class="table-primary">d_m</th>
      <td class="table-primary">durazno medio</td>


    </tr>
    <tr>
      <th scope="row"class="table-primary">f_l</th>
      <td class="table-primary">fresa litro</td>

    </tr>
    <tr>
      <th scope="row" class="table-primary">f_m</th>
      <td class="table-primary">fresa medio</td>


    </tr>
    <tr>
      <th scope="row"class="table-primary">g_l</th>
      <td class="table-primary">guayaba litro</td>

    </tr>
    <tr>
      <th scope="row" class="table-primary">g_m</th>
      <td class="table-primary">guayaba medio</td>


    </tr>
    <tr>
      <th scope="row"class="table-primary">n_l</th>
      <td class="table-primary">nuez litro</td>

    </tr>
    <tr>
      <th scope="row" class="table-primary">n_m</th>
      <td class="table-primary">nuez medio</td>


    </tr>
    <tr>
      <th scope="row"class="table-primary">p_l</th>
      <td class="table-primary">piña litro</td>

    </tr>
    <tr>
      <th scope="row" class="table-primary">p_m</th>
      <td class="table-primary">Piña medio</td>


    </tr>

    <tr>
      <th scope="row" class="table-primary">p_r</th>
      <td class="table-primary">Pedido realizado</td>


    </tr>

    </tbody>
</table>

</article>




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
