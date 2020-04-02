
<!--INDEX-->

<?php
  include "configs/config.php";
  include "configs/funciones.php";
?>

<?php   
  if(isset($_GET['pagina'])) { 
    $paginas=array("productos", "carrito"); 
	if(in_array($_GET['pagina'], $paginas)) { 
      $_pagina=$_GET['pagina']; 
    }else{ 
      $_pagina="productos"; 
    } 
  }else{ 
      $_pagina="productos"; 
  } 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Futmania</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
					
<!--ZONA DEL LOGO Y DEL LOGIN-->

	<header>
		<div class="wrapper">
		<div class="logo">
			<img src="img/logo2.png" width="200px" height="150px">
		</div>
		<nav>
			<a href="contenido/admin.html">Inicio sesión</a>
			<a href="contenido/administrador.html">Administrador</a>
			<a href="contenido/quienes_somos.html">Quienes somos</a>
			<a href="#">Carrito: </a>

		</nav>
		</div>
	</header>
	
	<!--Zona del menu desplegable -->
	
		<ul class="menu">
			<li><a href="index.html">Inicio</a></li>
			<li class="Futsal"><a href="#">Fútbol Sala</a>
				<ul>
					<li><a href="contenido/equipaciones_futsal.html">Equipaciones</a></li>
					<li><a href="contenido/zapatillas_futsal.html">Zapatillas</a></li>
					
				</ul>
			</li>
			<li class="fut"><a href="#">Fútbol</a>
				<ul>
					<li><a href="contenido/Futbol_femenino.html">Fútbol femenino</a></li>
					<li><a href="contenido/equipaciones_futbol.html">Equipaciones</a></li>
					<li><a href="contenido/botas_futbol.html">Botas de futbol</a></li>
					<li><a href="contenido/complementos_futbol.html">Complementos</a></li>
				</ul>
			</li>
			<li class="arbitro"><a href="#">Arbitraje</a>
				<ul>
					<li><a href="contenido/equipacion_arbitro.html">Equipaciones</a></li>
					<li><a href="contenido/zapatillas_arbitro.html">Zapatillas</a></li>
					<li><a href="contenido/accesorios_arbitro.html">Accesrios</a></li>
				</ul>
			</li>
			<li class="mate"><a href="#">Material</a>
				<ul>
					<li><a href="contenido/balones.html">Balones</a></li>
					<li><a href="contenido/pizarras_botellines.html">Pizarras y botellines</a></li>
					<li><a href="contenido/picas_conos_vallas.html">picas, conos, vallas</a></li>
					
				</ul>
			</li>
			<li><a href="contenido/contacto.html">Contacto</a></li>
		</ul>	

	<!--Zona del slider -->

	<section id="slider">
		<ul>
		<li><img src="img/aguncio1.jpg" width="800px" height="450px"></li>
		<li><img src="img/equipaciones1.jpg" width="800px" height="450px"></li>
		<li><img src="img/Mercurial.jpg" width="800px" height="450px"></li>
		<li><img src="img/estambul2020.jpg" width="800px" height="450px"></li>
	</ul>
	</section>

	<!--Zona de lo mas vendido -->
  
	<section id="categorias">
	  	
	  <?php require($_pagina.".php"); ?>
	  
	  <div>
	  <br>	  	  
	  <h1>Carrito</h1> 
	  <?php 
        if(isset($_SESSION['carrito']) && $_SESSION['carrito']) {   
          $sql5="SELECT * FROM productos WHERE Id IN ("; 
          foreach($_SESSION['carrito'] as $id => $value) { 
            $sql5.=$id.","; 
          } 
          $sql5 = substr($sql5, 0, -1).") ORDER BY Id ASC"; 
		  $query5 = mysqli_query($con, $sql5); 
          while($producto5 = mysqli_fetch_array($query5)) {  	  
      ?> 
      <p> <b>Producto: <?php echo $producto5['descripcion'] ?> x <?php echo $_SESSION['carrito'][$producto5['Id']]['cantidad'] ?></p></b> 
	  <?php } ?> 
	    <hr style="border: 1px black solid; margin-right: 5px;">
		<a href="index.php?pagina=carrito">Ir al carrito</a> 
      <?php      
        }else{   
          echo "<p>Tu carrito esta vacio. Por favor agrega productos.</p>"; 
        } 
	  ?>
	  </div>
	  </section>
	  <!--Zona de los metodos de seguridad y envio -->
	  <section id="metodos">
	    <section class="tres">
		  <img src="img/metodo.png" width="1275px" height="153px">
		</section>
	  </section>
</body>
</html>