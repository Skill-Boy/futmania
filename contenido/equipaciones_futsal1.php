<?php

$consulta = $mysqli -> query ("SELECT * FROM productos WHERE categoria LIKE equipaciones_futsal");
while ($r = mysqli_fetch_array($q)) {
?>

	<div class="producto">
		<div class="descripcion_producto"><?=$consulta['descripcion']?></div>
		<div><img class="imagen_producto" src="../img/futsal/inter.jpg / <?=$consulta['imagen']?>"/></div>
		<span class="precio"></span>
		<button class="boton-agregar"><i class="fa fa-shopping-cart"></i></button>
	</div>



<?php
}
?>