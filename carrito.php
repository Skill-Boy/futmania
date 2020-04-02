<?php
  if(isset($_POST['submit'])){ 
    if(isset($_POST['cantidad']) != '')  
    foreach($_POST['cantidad'] as $key => $val) { 
      if($val==0) { 
        unset($_SESSION['carrito'][$key]); 
      }else{ 
        $_SESSION['carrito'][$key]['cantidad'] = $val; 
      } 
    } 
  }
?>
<section class="uno" style="width: 70%; margin-right: 10px;">
<h1>Productos en carrito</h1> 
<a href="index.php?pagina=productos">Regresar a la pagina de productos</a> 
<form method="post" action="index.php?pagina=carrito"> 
    <br>  
    <table> 
      <tr style="background-color: #48575D; 
                color: #fff; height: 30px;"> 
        <th width="20%" style="padding: 5px;"> Nombre</th> 
        <th width="20%">Cantidad</th> 
        <th widt="25%">Precio Unitario</th> 
        <th width="25%">Precio Total</th> 
      </tr> 
          
      <?php 
        $sql4="SELECT * FROM productos WHERE Id IN ("; 
          foreach($_SESSION['carrito'] as $id => $value) { 
            $sql4.=$id.","; 
          } 
                      
          $sql4=substr($sql4, 0, -1).") ORDER BY Id ASC"; 
          $query3=mysqli_query($con, $sql4); 
          $PrecioTotal=0; 

          if($query3 != '')
          while($producto3=mysqli_fetch_array($query3)){ 
            $subtotal=$_SESSION['carrito'][$producto3['Id']]['cantidad']*$producto3['precio']; 
            $PrecioTotal+=$subtotal; 
          ?> 
        
        <tr> 
          <th width="20%" style="padding: 5px;"><?php echo $producto3['descripcion'] ?></td> 
          <th width="20%"><input type="text" name="cantidad[<?php echo $producto3['Id']; ?>]" size="5" value="<?php echo $_SESSION['carrito'][$producto3['Id']]['cantidad']; ?>" /></td> 
          <th width="25%"><?php echo $producto3['precio'] ?>€</td> 
          <th width="25%"><?php echo $_SESSION['carrito'][$producto3['Id']]['cantidad']*$producto3['precio']; ?>€</td> 
        </tr> 
        
        <?php } ?> 
        <tr> 
          <td colspan="4">Precio Total: <?php echo $PrecioTotal."€"; ?></td> 
        </tr>   
    </table> 
    <br /> 
    <button type="submit" name="submit">Actualizar Carrito</button> 
    <button>Comprar productos</button>
</form> 
<br /> 
<p>Para eliminar un artículo, establezca su cantidad en 0. </p>
</section>