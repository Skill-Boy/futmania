<?php 
  if(isset($_GET['action']) && $_GET['action']=="agregar"){       
    $id=intval($_GET['id']);   
    if(isset($_SESSION['carrito'][$id])){ 
      $_SESSION['carrito'][$id]['cantidad']++;       
    }else{ 
      $sql3="SELECT * FROM productos 
             WHERE Id={$id}
             AND id_categoria = 1"; 
      $result3=mysqli_query($con, $sql3); 
      if(mysqli_num_rows($result3)!=0){ 
        $producto2=mysqli_fetch_array($result3); 
        $_SESSION['carrito'][$producto2['Id']]=array( 
                  "cantidad" => 1, 
                  "precio" => $producto2['precio']); 
      }else{ 
        $mensaje="El codigo del producto es invalido";           
      }       
    }     
  } 
?> 
  
<section class="cero">Lo mas vendido</section>
<?php 
  if(isset($mensaje)){ 
    echo "<h2>$mensaje</h2>"; 
  } 
?> 
<?php
  $sql20 = "SELECT * FROM productos WHERE id_categoria = 1";
  $result20 = mysqli_query($con, $sql20);

  while ($producto = mysqli_fetch_array($result20)) { ?>
    <section class="uno">
      <img src="img/<?php echo $producto['imagen']; ?>" width="250px" height="150px" alt="<?php echo $producto['marca']; ?>">
 	  <h2><a href="#" class="vend"><?php echo $producto['descripcion']; ?></a></h2>
	  <h3><a href="index.php?pagina=productos&action=agregar&id=<?php echo $producto['Id']; ?>" class="preci" value="<?php echo $producto['Id']; ?>"> <?php echo $producto['precio']; ?> €</a></h3>		
    </section>		
<?php } ?>