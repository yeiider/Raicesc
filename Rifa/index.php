<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Consulta de numero de Rifa </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="dataTables.bootstrap4.min.css">
</head>
<body>
	
<div class="container " style="margin-top: 40px">
	
	<div class="row">
		<div class="col mb-5">
			<button class="btn btn-primary" id="guachene">Guachene</button>
			<button class="btn btn-primary" id="padilla">Padilla</button>
			<button class="btn btn-primary" id="sur">Ciudad del Sur</button>
			<?php
			session_start();
			if(isset($_SESSION["user"])){
			echo "<button class='btn btn-success' data-toggle='modal' data-target='#exampleModal'>Registrar</button>
			<a class='btn btn-danger' id='sur' href='cerrar.php'>Salir</a>";
			} 

			 ?>
			
		</div>
	</div>
    <div class="tabla">
    	
    </div>
	</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="registro.php" method="post">
        	<div class="form-group">
        		<label for="nombre">Nombre</label>
        		<input type="text" name="nombre" id="nombre" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="direccion">Direccion</label>
        		<input type="text" name="direccion" id="direccion" class="form-control">
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" name="enviar">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script src="jquery-3.3.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
			
       	$.ajax({
       		url:"guachene.php",
       		success:function(rest){
       			$(".tabla").html(rest)
       		}
       	})
       $("#guachene").on('click',function(){
       	$.ajax({
       		url:"guachene.php",
       		success:function(rest){
       			$(".tabla").html(rest)
       		}
       	})
       })

       $("#padilla").on('click',function(){
       	$.ajax({
       		url:"padilla.php",
       		success:function(rest){
       			$(".tabla").html(rest)
       		}
       	})
       })

       $("#sur").on('click',function(){
       	$.ajax({
       		url:"sur.php",
       		success:function(rest){
       			$(".tabla").html(rest)
       		}
       	})
       })



	})

</script>
</body>
</html>
