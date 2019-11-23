@include('thema.head')
<div class="container mt-5">
	<form action="{{route('create.portafolio')}}" method="post" autocomplete="off" enctype="multipart/form-data">

	<div class="form-group">
		<label for="titulo" class="control-label">Titulo</label>
		<input type="text" name="titulo" class="form-control" required=""  id="titulo">
	</div>	
	<div class="form-group">
		<label for="subtitulo" class="control-label">Sub Titulo</label>
		<input type="text" name="subtitulo" class="form-control" required=""  id="subtitulo">
	</div>	
{{ csrf_field() }}
	<div class="form-group">
		<label for="titulo2" class="control-label">Titulo del Proyecto</label>
		<input type="text" name="titulo2" class="form-control" required=""  id="titulo2">
	</div>	
    <div class="form-group">
		<label for="subtitulo2" class="control-label">Sub Titulo del Proyecto</label>
		<input type="text" name="subtitulo2" class="form-control" required=""  id="subtitulo2">
	</div>	


	<div class="form-group">
     <label for="body">Escriba el Proyecto</label>
     <textarea name="body" id="body">Describe el proyecto</textarea>	
	</div>
    
      <div class="form-group">
		<label for="img" class="control-label">Imagen Descripcion: </label>
		<input type="file" name="imagen"   id="imagen">
	</div>	

	  <div class="form-group">
		<label for="imagen2" class="control-label">Imagen del Proyecto: </label>
		<input type="file" name="imagen2"   id="imagen2">
	</div>	

	<input type="hidden" name="id" >

	<div class="form-group">
		<input type="submit" name="enviar" value="Guardar" class="btn btn-primary form-control btn-xs" >
	</div>

   </form>
</div>


@include('thema.foot')