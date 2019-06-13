<?php
include "inc/config_bbdd.php";

if (isset($_GET['pagina'])){
		//cancelliamo la coockie
		$pagina = $_GET['pagina'];
	}
else {
	$pagina = 1;
}
//in ternario
// $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1 ;
?>





<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Font Awesone -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
    <title>Menús dinámicos</title>
  </head>
  <body>
    
  <div class="container-fluid">
  
	<div class="row">
		<?php
		$sql = "select * from menus order by orden";
		$result = mysqli_query($conn, $sql);
		
		for ($i=0;$i<mysqli_num_rows($result);$i++){
			$menu = mysqli_fetch_assoc($result);
			?>
     
			<a class="col text-center bg-<?php echo $menu['color'];?> text-white p-5" href="index.php?pagina=<?php echo $menu['id'];?>"><?php echo $menu['icono'];?> <?php echo $menu['nombre'];?></a>
		<?php }?>
    </div>


    <div class="row">
	
	<?php
		$sql2 = "select * from contenidos where id_pagina= $pagina order by orden";
		$result2 = mysqli_query($conn, $sql2);
		
		for ($i=0;$i<mysqli_num_rows($result2);$i++){
			$contenido = mysqli_fetch_assoc($result2);
			?>
			
			
      <div class="col m-3">
        <p><?php echo $contenido['contenido']; ?></p>
		<?php } ?>
      </div>  
    </div>

   
</div>
 

	
<!-- per chiudere la connessione con il Database -->
	<?php
	mysqli_close($conn);
	?>
	
	

	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.js"></script>
    <!-- bundle incluye popper.js -->
   <script src="js/bootstrap.bundle.js"></script>
   <script src="js/miscript.js"></script>
  </body>
</html>