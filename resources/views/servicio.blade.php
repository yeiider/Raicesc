@include('thema.head')

<form action="{{route('set.servicio')}}" method="post" autocomplete="off">
	<div class="form-group">
		<label for="titulo">Titulo</label>
		@if(isset($servicio->titulo))<input type="text" name="titulo" class="form-control" value="{{$servicio->titulo}}" required="" id="titulo">
		@endif
{{ csrf_field() }}
	</div>
	<div class="form-group">
		<label for="class">Clase (Icono)</label>
	@if(isset($servicio->class))	<input type="text" name="class" class="form-control" value="{{$servicio->class}}" required="" id="class">
	@endif
	</div>

	@if(isset($servicio->id))<input type="hidden" name="id" value="{{$servicio->id}}">
    @endif
	<input type="submit" value="Guardar" name="guardar" class="btn btn-primary form-control">
</form>

@include('thema.foot')