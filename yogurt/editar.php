<?php
if (isset($_GET['editar'])) {
$editar_id = $_GET['editar'];

$consulta = "SELECT * FROM metro where id_imagen='$editar_id'";
$ejecutar = mysqli_query($con,$consulta);
$fila = mysqli_fetch_array($ejecutar);
$titulo = $fila['titulo'];
$img = $fila['img'];
$cont = $fila['cont'];
}


 ?>

<form  method="post" action="" enctype="multipart/form-data">
  <label> <h3>EDITAR</h3> </label>
  <label>id:<?php echo $id ?></label>
  <br>
  <label>Titulo:</label>
  <input type="text" name="unidad" value="<?php echo $titulo; ?>" ><br>
  <label>Imagen:</label>
  <input name="opera" id="archivo" type="file"/>
  <div class="input-group" width="60px">
    <div class="input-group-prepend" >
      <span class="input-group-text">Contenido</span>
    </div>
    <textarea class="form-control" name="cont"  aria-label="With textarea" value="<?php echo $cont; ?>"></textarea>
  </div>
  <input type="submit" name="actualizar" value="ACTUALIZAR DATOS"/>
  <br>
  <br>

</form>
<?php
if (isset($_POST['actualizar'])) {

$actualizar_unidad = $_POST['unidad'];
$actualizar_opera = addslashes(file_get_contents($_FILES['opera']['tmp_name']));
$actualizar_cont = $_POST['cont'];

$actualizar = "UPDATE metro SET titulo = '$actualizar_unidad',img = '$actualizar_opera',cont = '$actualizar_cont' WHERE  id_imagen = '$editar_id' ";
$ejecutar = mysqli_query($con , $actualizar);

if ($ejecutar) {
  echo "<script>alert('datos actualizados')</script>";
  echo "<script>window.open('blog.php','_self')</script>";
  // code...
}

}
 ?>
