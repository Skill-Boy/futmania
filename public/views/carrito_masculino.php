<?php
  if(isset($_POST['submit'])){ 
    if(isset($_POST['cantidad']) != '')  
    foreach($_POST['cantidad'] as $key => $val) { 
      if($val==0) { 
        unset($_SESSION['carrito_masculino'][$key]); 
      }else{ 
        $_SESSION['carrito_masculino'][$key]['cantidad'] = $val; 
      } 
    } 
  }
?>
<section class="uno" style="width: 70%; margin-right: 10px;">
<h1>Productos en carrito_masculino</h1> 
<a href="futbol_masculino.php?pagina=productos_masculino">Regresar a la pagina de productos</a> 
<form method="post" action="futbol_masculino.php?pagina=carrito_masculino"> 
    <br>  
    <table width="90%"> 
      <tr style="background-color: #48575D; 
                color: #fff; height: 30px;"> 
        <th width="50%" style="padding: 5px;"> Nombre</th> 
        <th width="10%">Cantidad</th> 
        <th widt="15%">Precio Unitario</th> 
        <th width="15%">Precio Total</th> 
      </tr> 
          
      <?php 
        $sql4="SELECT * FROM products WHERE id IN ("; 
          foreach($_SESSION['carrito_masculino'] as $id => $value) { 
            $sql4.=$id.","; 
          } 
                      
          $sql4=substr($sql4, 0, -1).") ORDER BY id ASC"; 
          $query3=mysqli_query($con, $sql4); 
          $PrecioTotal=0; 

          if($query3 != '')
          while($producto3=mysqli_fetch_array($query3)){ 
            $subtotal=$_SESSION['carrito_masculino'][$producto3['id']]['cantidad']*$producto3['price']; 
            $PrecioTotal+=$subtotal; 
          ?> 
        
        <tr> 
          <th width="50%" style="padding: 10px;"><img src="../../<?php echo $producto3['img']; ?>" width="50px" height="50px"> <?php echo $producto3['name'] ?></td> 
          <th width="10%"><input type="text" name="cantidad[<?php echo $producto3['id']; ?>]" size="5" value="<?php echo $_SESSION['carrito_masculino'][$producto3['id']]['cantidad']; ?>" /></td> 
          <th width="15%"><?php echo $producto3['price'] ?>€</td> 
          <th width="15%"><?php echo $_SESSION['carrito_masculino'][$producto3['id']]['cantidad']*$producto3['price']; ?>€</td> 
        </tr> 
        
        <?php } ?> 
        <tr> 
          <td colspan="4">Precio Total: <?php echo $PrecioTotal."€"; ?></td> 
        </tr>   
    </table> 
    <br /> 

    <script>
      function Pedidos() { 
        $.ajax({ 
          type: "GET", 
          url: 'http://localhost/futmania/public/views/futbol_masculino.php?pagina=carrito_masculino', 
          data:{action:'call_this'}, 
          success:function(html) { 
            alert("PRODUCTOS GUARDADO CORRECTAMENTE :D"); 
          } 
        }); 
      } 
    </script>        
    <?php
      if(empty(isset($_SESSION['carrito_masculino'])) != 1) {
        echo '<button type="submit" name="submit">Actualizar carrito</button>'; 
        echo '<button name="pedido" onclick="Pedidos();">Comprar Productos</button>';
      }
    ?> 
</form> 
<br /> 
<p>Para eliminar un artículo, establezca su cantidad en 0. </p>
</section>

<?php
  if(isset($_GET['action']))
  if($_GET['action'] == 'call_this'){ 
    include '../../configs/funciones.php';

    $prod = [];
    foreach($_SESSION['carrito_masculino'] as $id => $value) {
      $prod[] = $id;  
      unset($_SESSION['carrito_masculino'][$id]);
    } 

    foreach($prod as $ids => $value) {
      $agregar = "INSERT INTO carrito(id_productos) VALUES ($value)"; 
      $consulta= mysqli_query($con, $agregar);
    }
          
    mysqli_close($con);
  }
?>