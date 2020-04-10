<?php 
  if(isset($_GET['action']) && $_GET['action']=="agregar"){  
    $id=intval($_GET['id']);   
    if(isset($_SESSION['carrito_masculino'][$id])){ 
      $_SESSION['carrito_masculino'][$id]['cantidad']++;       
    }else{ 
      $sql3="SELECT * FROM products 
             WHERE id={$id}
             AND category_id = 1"; 
      $result3=mysqli_query($con, $sql3); 
      if(mysqli_num_rows($result3)!=0){ 
        $producto2=mysqli_fetch_array($result3); 
        $_SESSION['carrito_masculino'][$producto2['id']]=array( 
                  "cantidad" => 1, 
                  "price" => $producto2['price']); 
      }else{ 
        $mensaje="El codigo del producto es invalido";           
      }       
    }     
  } 
?> 

<?php 
  if(isset($mensaje)){ 
    echo "<h2>$mensaje</h2>"; 
  } 
?> 
<?php
  $sql20 = "SELECT * FROM products WHERE category_id = 1";
  $result20 = mysqli_query($con, $sql20);
  while ($products_sort = mysqli_fetch_array($result20)) { ?>
    <section class="uno">
				<img src="../../<?php echo $products_sort['img'] ?>" width="200px" height="150px">
				<h2><a href="#" class="vend"><?php echo $products_sort['name']; ?></a></h2>
				<h3><a href="#" class="preci"><?php echo $products_sort['price']; ?>€</a></h3>
				<a href="futbol_masculino.php?pagina=productos_masculino&action=agregar&id=<?php echo $products_sort['id']; ?>" class="carro" value="<?php echo $products_sort['id']; ?>">Añadir al carrito</a>
		</section>		
<?php } ?>