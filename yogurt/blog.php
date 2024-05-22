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

          <li> <a href="index.php">Inicio</a> </li>
          <li> <a href="recepcion.php">Recepcion</a> </li>


        </ul>
      </nav>
    </div>
</header>
  <h2>♥BLOG MAMÁ R'OSA♥</h2>
<?php /////////////////////////////formulario///////////////////////// ?>

  <div class="table-responsive">
    <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>TITULO</th>
        <th>IMAGEN</th>
        <th>Contenido</th>
        <th>borrar</th>
        <th>editar</th>
      </tr>
      </thead>
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
    <tbody>


       <tr align="center">
          <td><?php echo $id; ?></td>
         <td><?php echo $titulo; ?></td>
         <td><img width="30px" src="data:image/jpg;base64,<?php echo base64_encode($fila['img']); ?>"/></td>
         <td><?php echo $cont; ?></td>
         <td><a href="blog.php?editar=<?php echo $id; ?>">Editar</a> </td>
         <td><a href="blog.php?borrar=<?php echo $id; ?>">Borrar</a> </td>


       </tr>
     <?php } ?>
     </tbody>
    </table>

  </div>
<?php
  if (isset($_GET['borrar'])) {

  $borrar_id = $_GET['borrar'];
  $borrar = "DELETE FROM metro WHERE id_imagen ='$borrar_id'";
  $ejecutar = mysqli_query($con,$borrar);
  if ($ejecutar) {
    echo "<script>alert('Pedido realizado')</script>";
    echo "<script>window.open('blog.php','_self')</script>";
  }
  }

 ?>
<?php ////////////////////////////////////////////////////// ?>

<?php
if (isset($_GET['editar'])) {
  include("editar.php");
}
 ?>

<?php //////////////////////////////////////////////////////// ?>
<h3>AGREGAR DATOS</h3> <center>
  <form  action="blog.php" method="post" enctype="multipart/form-data">
  <label>titulo:</label>
  <input type="text" name="unidad" > <br>
  <label>Imagen:</label>
  <input name="opera" id="archivo" type="file"/> <br>
  <div class="input-group" width="60px">
    <div class="input-group-prepend" >
      <span class="input-group-text">Contenido</span>
    </div>
    <textarea class="form-control" name="cont"  aria-label="With textarea"></textarea>
  </div>
  <input type="submit" name="insert" value="agregar dato">
</center>

</form>
<?php
if (isset($_POST['insert'])) {
$unidad = $_POST['unidad'];
$opera = addslashes(file_get_contents($_FILES['opera']['tmp_name']));
$cont = $_POST['cont'];

$insertar = "INSERT INTO metro(titulo,img,cont) VALUES ('$unidad','$opera','$cont')";

$ejecutar = mysqli_query($con,$insertar);
if ($ejecutar) {
  echo "<script>window.open('blog.php','_self')</script>";

}
}
 ?>

<?php //////////////////////////////////////////////////////////// ?>

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
