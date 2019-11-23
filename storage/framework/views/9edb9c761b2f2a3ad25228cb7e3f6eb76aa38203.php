<?php echo $__env->make('thema.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<form action="<?php echo e(route('set.servicio')); ?>" method="post" autocomplete="off">
	<div class="form-group">
		<label for="titulo">Titulo</label>
		<?php if(isset($servicio->titulo)): ?><input type="text" name="titulo" class="form-control" value="<?php echo e($servicio->titulo); ?>" required="" id="titulo">
		<?php endif; ?>
<?php echo e(csrf_field()); ?>

	</div>
	<div class="form-group">
		<label for="class">Clase (Icono)</label>
	<?php if(isset($servicio->class)): ?>	<input type="text" name="class" class="form-control" value="<?php echo e($servicio->class); ?>" required="" id="class">
	<?php endif; ?>
	</div>

	<?php if(isset($servicio->id)): ?><input type="hidden" name="id" value="<?php echo e($servicio->id); ?>">
    <?php endif; ?>
	<input type="submit" value="Guardar" name="guardar" class="btn btn-primary form-control">
</form>

<?php echo $__env->make('thema.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Raiesc/resources/views/servicio.blade.php ENDPATH**/ ?>