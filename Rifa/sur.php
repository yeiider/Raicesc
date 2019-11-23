<?php
  $$servidor="localhost";
  $user="yeiider95";
  $db="raicesc";
  $pass="y3id3r/95/12";
  $connet= mysqli_connect($servidor,$user,$pass,$db) or die(mysqli_connect_error());
  
  $query=$connet->query("SELECT * FROM sur");

  $connet->close();
 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>guachene</title>
 	
        <link rel="stylesheet" href="bootstrap.css">
 	<link rel="stylesheet" href="dataTables.bootstrap4.min.css">
 </head>
 <body>

 <table class="table table-hover" id="mytable">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Numero 1</th>
      <th scope="col">Numero 2</th>
    </tr>
  </thead>
  <tbody>
  	<?php while ($g=$query->fetch_array()){ ?>
    <tr>
      <th><?=$g['NOMBRE'];?></th>
      <td><?=$g['DIRECCION'];?></td>
      <td><?=$g['CODIGO'];?></td>
      <td><?=$g['CODIGO2'];?></td>
    </tr>
    <?php }; ?>

   
  </tbody>
</table>	
  <script src="jquery-3.3.1.js"></script>
  <script src="jquery.dataTables.min.js"></script>
  <script src="dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		 $('#mytable').DataTable();
  	})
  </script>
 </body>
 </html>
