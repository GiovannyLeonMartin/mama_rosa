
<?php

if (!empty($_POST['dlitro']) AND !empty($_POST['dmedio'] AND !empty($_POST['flitro']) AND !empty($_POST['fmedio']) AND !empty($_POST['glitro']) AND !empty($_POST['gmedio']) AND !empty($_POST['nlitro']) AND
!empty($_POST['nmedio']) AND !empty($_POST['glitro']) AND !empty($_POST['gmedio']) AND !empty($_POST['nlitro']) AND !empty($_POST['nmedio']) AND !empty($_POST['plitro']) AND !empty($_POST['pmedio']) AND
!empty($_POST['nombre']) AND !empty($_POST['correo']) AND !empty($_POST['dire']) AND !empty($_POST['hora']) AND !empty($_POST['fecha']) AND !empty($_POST['referencias'])) {
  $to = "boxor100@gmail.com";
  $headres = "Content-Type:text/html;charset:=UTF-8\n";
  $headres = "Form:".$_POST['nombre']."\n";
  $tema = "Pedido nuevo";
  $mensaje ="
Nombre: $_POST[nombre]
Correo: $_POST[correo]
Fecha de entrega : $_POST[fecha]
Hora de entrega : $_POST[hora]
Direccion : $_POST[dire]
Referencias: $_POST[referencias]
pedido
Durazno litro : $_POST[dlitro]
Durazno medio : $_POST[dmedio]

Fresa litro : $_POST[flitro]
Fresa medio : $_POST[fmedio]

Guayaba litro : $_POST[glitro]
Guayava medio : $_POST[gmedio]

Nuez litro : $_POST[nlitro]
Nuez medio : $_POST[nmedio]

Piña litro : $_POST[plitro]
Piña medio : $_POST[pmedio]
  ";
  @mail($to,$tema,$mensaje,$headres);
  echo "
<script language = "javascript">
alert("mensaje enviado correctamente");
location.href="../pedidos.php";
</script>  ";



} else{
  echo "
<script language = "javascript">
alert("mensaje enviado erroneamente");
location.href="../pedidos.php";
</script>  ";
}
 ?>
