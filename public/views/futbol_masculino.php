<?php
  include "../../configs/config.php";
  include "../../configs/funciones.php";
?>

<?php   
  if(isset($_GET['pagina'])) { 
    $paginas=array("productos_masculino", "carrito_masculino"); 
	if(in_array($_GET['pagina'], $paginas)) { 
      $_pagina=$_GET['pagina']; 
    }else{ 
      $_pagina="productos_masculino"; 
    } 
  }else{ 
      $_pagina="productos_masculino"; 
  } 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/estilos_femenino.css">
	<script type="text/javascript" src="../../js/jquery.js"></script>
</head>
<body>

	<?php  require("../../public/share/header.php")?>
	<?php require("../../public/share/menu.php") ?>
	
	<section id="categorias">
	  <?php require($_pagina.".php"); ?>

	  <div>
	  <br>	  	  
	  <h1>Carrito</h1> 
	  <?php 
        if(isset($_SESSION['carrito_masculino']) && $_SESSION['carrito_masculino']) {   
          $sql5="SELECT * FROM products WHERE id IN ("; 
          foreach($_SESSION['carrito_masculino'] as $id => $value) { 
            $sql5.=$id.","; 
          } 
          $sql5 = substr($sql5, 0, -1).") ORDER BY id ASC"; 
		  $query5 = mysqli_query($con, $sql5); 
          while($producto5 = mysqli_fetch_array($query5)) {  	  
      ?> 
      <p> <b>Producto: <img src="../../<?php echo $producto5['img']; ?>" width="50px" height="50px"> <?php echo $producto5['name'] ?> x <?php echo $_SESSION['carrito_masculino'][$producto5['id']]['cantidad'] ?></p></b> 
	  <?php } ?> 
	    <hr style="border: 1px black solid;">
		<a href="futbol_masculino.php?pagina=carrito_masculino">Ir al carrito</a> 
      <?php      
        }else{   
          echo "<p>Tu carrito esta vacio. Por favor agrega productos.</p>"; 
        } 
	  ?>
	  </div>
	  </section>
	
</body>
</html>