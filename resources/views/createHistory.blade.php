@include('thema.head')
<div class="container mt-5">
	<form action="{{route('add.historia')}}" method="post" autocomplete="off" enctype="multipart/form-data">

	<div class="form-group">
		<label for="titulo" class="control-label">Titulo</label>
		<input type="text" name="titulo" class="form-control" required=""  id="titulo">
	</div>	
	
{{ csrf_field() }}
	<div class="form-group">
     <label for="body">Body</label>
     <textarea name="contedino" id="body">Escriba aqui!</textarea>	
	</div>
    
      <div class="form-group">
		<label for="img" class="control-label">Imagen Descripcion: </label><small>200 x 200</small>
		<input type="file" name="imagen"   id="imagen">
	</div>	

	 
	

	<div class="form-group">
		<input type="submit" name="enviar" value="Guardar" class="btn btn-primary form-control btn-xs" >
	</div>

   </form>
</div>


@include('thema.foot')