<?php $__env->startSection('content'); ?>


<div class="card">
  <div class="card-header">genders Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($genders->name); ?></h5>
  </div>

    </hr>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraval\login\resources\views/genders/show.blade.php ENDPATH**/ ?>