<?php
  include "../../configs/config.php";
  include "../../configs/funciones.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilos_femenino.css">
</head>
<body>

	<?php  require("../../public/share/header.php")?>
	<?php require("../../public/share/menu.php") ?>
	
	<?php require("../../functions/fut_complementos.php") ?>

		<?php while ($products_sort = mysqli_fetch_array($fut_complementos)) { ?>

			<section class="uno">
				<img src="../../<?php echo $products_sort['img'] ?>" width="200px" height="150px">
				<h2><a href="#" class="vend"><?php echo $products_sort['name'] ?></a></h2>
				<h3><a href="#" class="preci"><?php echo $products_sort['price'] ?>€</a></h3>
				<a href="#" class="carro">Añadir al carrito</a>
			</section>
		
        <?php } ?>
        
</body>
</html>