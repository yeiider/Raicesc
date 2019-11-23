

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administrador</title>
	<link rel="shortcut icon" href="https://wisphub.net/media/uploadsCKEditor/yeideradrian.noba%40gmail.com%40global-raices-tv/2019/08/29/logoticsv1-recuperado.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://wisphub.net/media/uploadsCKEditor/yeideradrian.noba%40gmail.com%40global-raices-tv/2019/08/29/logoticsv1-recuperado.jpg" class="brand_logo " alt="Logo" width="300">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="{{route('entrar')}}">
						{{ csrf_field() }}
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="" placeholder="nombre">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="contraseña">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Recuerdame</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
					<input type="submit" name="button" class="btn btn-primary" value="Ingresar">
				</div>
					</form>
				</div>
				
				
			</div>
		</div>
	

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> 
	<script type="text/javascript">

	</script>
</body>
</html>
