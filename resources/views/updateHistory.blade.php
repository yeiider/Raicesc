@include('thema.head')
<div class="container mt-5">
	<form action="{{route('set.historia')}}" method="post" autocomplete="off" enctype="multipart/form-data">

	<div class="form-group">
		<label for="titulo" class="control-label">Titulo</label>
		<input type="text" name="titulo" class="form-control" required="" name="titulo"  id="titulo" value="{{$historia->titulo}}">
	</div>	
	
{{ csrf_field() }}
	<div class="form-group">
     <label for="body">Body</label>
     <textarea name="contedino" id="body">{{$historia->contedino}}</textarea>	
	</div>
    
      <div class="form-group">
		<label for="img" class="control-label">Imagen Descripcion: <small>tamaño -> 200 X 200</small> </label>
		<input type="file" name="imagen" value=""   id="imagen">
	</div>	

	 	<input type="hidden" name="id"  value="{{$historia->id}}">
	

	<div class="form-group">
		<input type="submit" name="enviar" value="Guardar" class="btn btn-primary form-control btn-xs" >
	</div>

   </form>
</div>


@include('thema.foot')