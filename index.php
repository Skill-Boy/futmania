
<!--INDEX-->

<?php
  include "configs/config.php";
  include "configs/funciones.php";
?>

<!--Se usan variables de sesion para que el carrito mantenga los productos escodigos-->
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
<!--Fin $_pagina agarra el nombre del archivo sin la extension.php tu variable tiene que llamarse como el archivo-->

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
			<a href="public/views/quienes.php">Quienes somos</a>
			<a href="#">Carrito </a>

		</nav>
		</div>
	</header>
	
<!--Zona del menu desplegable -->
	<ul class="menu">
		<!--<li><a href="#">Inicio</a></li>-->
		<li class="Futsal"><a href="#">Fútbol Sala</a>
			<ul>
				<li><a href="contenido/equipaciones_futsal.html">Equipaciones</a></li>
				<li><a href="contenido/zapatillas_futsal.html">Zapatillas</a></li>
				
			</ul>
		</li>
		<li class="fut"><a href="#">Fútbol</a>
			<ul>
				<li><a href="public/views/futbol_masculino.php">Fútbol masculino</a></li>
				<li><a href="public/views/futbol_femenino.php">Fútbol femenino</a></li>
				<li><a href="public/views/botas_futbol.php">Botas de futbol</a></li>
				<li><a href="public/views/futbol_complementos.php">Complementos</a></li>
			</ul>
		</li>
		<li class="arbitro"><a href="#">Arbitraje</a>
			<ul>
				<li><a href="public/views/equipo_arbitro.php">Equipaciones</a></li>
				<li><a href="public/views/zapatillas_arbitro.php">Zapatillas</a></li>
				<li><a href="public/views/accesorios_arbitro.php">Accesorios</a></li>
			</ul>
		</li>
		<li class="mate"><a href="#">Material</a>
			<ul>
				<li><a href="public/views/balones.php">Balones</a></li>
				<li><a href="public/views/general.php">General</a></li>
				<!--<li><a href="contenido/pizarras_botellines.html">Pizarras y botellines</a></li>
				<li><a href="contenido/picas_conos_vallas.html">picas, conos, vallas</a></li>-->
				
			</ul>
		</li>
		<li><a href="public/views/contacto.php">Contacto</a></li>
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
	<!-- Llamas el archivo y la añades la extension -->
	  <?php require($_pagina.".php"); ?>
    <!--FIn del llamado-->
	  <div>
	  <br>	  	  
	  <h1>Carrito</h1> 
	  <!--Si existe la sesion del carrito con su respectivo archivo se llama-->
	  <?php 
        if(isset($_SESSION['carrito']) && $_SESSION['carrito']) {   
          $sql5="SELECT * FROM products WHERE id IN ("; 
          foreach($_SESSION['carrito'] as $id => $value) { 
            $sql5.=$id.","; 
          } 
          $sql5 = substr($sql5, 0, -1).") ORDER BY id ASC"; 
		  $query5 = mysqli_query($con, $sql5); 
          while($producto5 = mysqli_fetch_array($query5)) {  	  
      ?> 
      <p> <b>Producto: <img src=" <?php echo $producto5['img']; ?>" width="50px" height="50px"> <?php echo $producto5['name'] ?> x <?php echo $_SESSION['carrito'][$producto5['id']]['cantidad'] ?></p></b> 
	  <?php } ?> 
	    <hr style="border: 1px black solid;">
		<!--Tiene que tener el mismo nombre del archivo el ?pagina es el nombre de la variable para el cambio no tiene archivo en si se usa para cambiar a los archivos que se usan con las otras variables-->
		<a href="index.php?pagina=carrito">Ir al carrito</a> 
      <?php      
        }else{   
          echo "<p>Tu carrito esta vacio. Por favor agrega productos.</p>"; 
		} 
	  ?>
	  <!--FIn del archivo-->
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