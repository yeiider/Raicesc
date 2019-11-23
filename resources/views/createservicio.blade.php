@include('thema.head')

	<form action="{{route('addSer')}}" method="post" autocomplete="off">
		<div class="form-group">
			<label for="titulo">Titulo</label>
			<input type="text" name="titulo" class="form-control" value="" required="" id="titulo">
	{{ csrf_field() }}
		</div>
		<div class="form-group">
			<label for="class">Clase (Icono)</label>
			<input type="text" name="class" class="form-control" value="" required="" id="class">
		</div>
		<a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" class="mt-5">Lista de Clasess Para Iconos</a> <p>Ejemplo "fab fa-android" <i class="fab fa-android"></i></p>

		<input type="hidden" name="id" value="">

		<input type="submit" value="Guardar" name="guardar" class="btn btn-primary form-control">
	</form>

@include('thema.foot')