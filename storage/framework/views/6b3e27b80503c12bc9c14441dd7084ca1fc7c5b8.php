<?php $__env->startSection('contenido'); ?>
<div class="container col-md-8 col-md-offset-2">
	<div class="well bs-component">

		<form class="form-horizontal" method="post" action="registro1">

			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<p class="alert alert-danger"><?php echo e($error); ?></p>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<?php if(session('status')): ?>
				<div class="alert alert-success">
					<?php echo e(session('status')); ?>

					
				</div>
				<?php endif; ?>
					

			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

			<fieldset>
				<legend>Registro</legend>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Nombre</label>
					<div class="col-lg-10">
						<input type="text" 
						class="form-control" id="title" placeholder="Nombre" name="name">
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Apellido</label>
					<div class="col-lg-10">
						<input type="text" 
						class="form-control" id="title" placeholder="Apellido" name="apellido">
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">E-mail</label>
					<div class="col-lg-10">
						<input type="text" 
						class="form-control" id="title" placeholder="E-mail" name="mail">
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Direccion</label>
					<div class="col-lg-10">
						<input type="text" 
						class="form-control" id="title" placeholder="Direccion" name="direccion">
					</div>
				</div>

				
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button class="btn btn-default">Cancelar</button>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</div>
			</fieldset>
		</form>
		
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('vista1', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>