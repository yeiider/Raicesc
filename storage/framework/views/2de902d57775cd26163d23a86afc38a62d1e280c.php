<?php echo $__env->make('thema.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container mt-5">
	<form action="<?php echo e(route('setportafolio')); ?>" method="post" autocomplete="off" enctype="multipart/form-data">

	<div class="form-group">
		<label for="titulo" class="control-label">Titulo</label>
		<input type="text" name="titulo" class="form-control" required="" value="<?php echo e($p->titulo); ?>" id="titulo">
	</div>	
	<div class="form-group">
		<label for="subtitulo" class="control-label">Sub Titulo</label>
		<input type="text" name="subtitulo" class="form-control" required="" value="<?php echo e($p->subtitulo); ?>" id="subtitulo">
	</div>	
<?php echo e(csrf_field()); ?>

	<div class="form-group">
		<label for="titulo2" class="control-label">Titulo del Proyecto</label>
		<input type="text" name="titulo2" class="form-control" required="" value="<?php echo e($p->titulo2); ?>" id="titulo2">
	</div>	
    <div class="form-group">
		<label for="subtitulo2" class="control-label">Sub Titulo del Proyecto</label>
		<input type="text" name="subtitulo2" class="form-control" required="" value="<?php echo e($p->subtitulo2); ?>" id="subtitulo2">
	</div>	


	<div class="form-group">
     <label for="body">Escriba el Proyecto</label>
     <textarea name="body" id="body"><?php echo e($p->cuerpo); ?></textarea>	
	</div>
    
      <div class="form-group">
		<label for="img" class="control-label">Imagen Descripcion: </label>
		<input type="file" name="imagen"   id="imagen">
	</div>	

	  <div class="form-group">
		<label for="imagen2" class="control-label">Imagen del Proyecto: </label>
		<input type="file" name="imagen2"   id="imagen2">
	</div>	

	<input type="hidden" name="id" value="<?php echo e($p->id); ?>">

	<div class="form-group">
		<input type="submit" name="enviar" value="Guardar" class="btn btn-primary form-control btn-xs" >
	</div>

   </form>
</div>


<?php echo $__env->make('thema.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Raiesc/resources/views/portafolio.blade.php ENDPATH**/ ?>