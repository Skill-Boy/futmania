<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/estilos_femenino.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css"/>
</head>
<body>

	<?php  require("../../public/share/header.php")?>
	<?php require("../../public/share/menu.php") ?>
	
	<form action="enviar.php" method="post">
        <h2>CONTACTO</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="Nombre" placeholder="Nombre"
            required="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Correo" placeholder="Correo" required="">
        </div>
        <div class="form-group">      
            <input type="text" class="form-control" name="Telefono" placeholder="Telefono"
            required="">
        </div> 
        <div class="form-group"> 
            <textarea name="mensaje" class="form-control" placeholder="Escriba aquí su mensaje" required=""></textarea>
        <div>
		<button type="submit" class="btn btn-primary">Enviar</button>
    </form>
        
</body>
</html>