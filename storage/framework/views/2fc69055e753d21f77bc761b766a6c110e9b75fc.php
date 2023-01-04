<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Student Details</b></div>
			<div class="col col-md-6">
				<a href="<?php echo e(route('Books.index')); ?>" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Book Name</b></label>
			<div class="col-sm-10">
				<?php echo e($Book->book_name); ?>

			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Book id</b></label>
			<div class="col-sm-10">
				<?php echo e($Book->book_id); ?>

			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Gender</b></label>
			<div class="col-sm-10">
				<?php echo e($Book->gender); ?>

			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Books Image</b></label>
			<div class="col-sm-10">
				<img src="<?php echo e(asset('images/' .  $Book->book_image)); ?>" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Books.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraval\login\resources\views/Books/show.blade.php ENDPATH**/ ?>