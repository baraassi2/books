<?php $__env->startSection('content'); ?>
<!--End Navbar-->


<!--Start section-one-->

<section class="section-one text-center">
    <div class="container">
        <div class="content-me">
            <h2> أهلا بك فى جدول الناشر</h2>
            <p>" عندما تضيق الحرية فإن الكلام عن المسئولية أقرب إلى أوهام محلقة. "</p>
            <span>-عبد الله السناوي-</span>
        </div>
    </div>
</section>

<section class="main-side">
    <div class="container text-right">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-danger text-right " role="alert">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>
        <a class="btn btn-success" href="<?php echo e(route('Publishers.create')); ?>">اضافة ناشر </a>

        <br><br>
        <table class="table table  table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الناشر</th>
                    <th scope="col">تعديل والحذف</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $Publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($Publisher->id); ?></th>
                    <td><?php echo e($Publisher->name_publisher); ?></td>
                    <td>
                        <form action="<?php echo e(route('Publishers.destroy',$Publisher->id)); ?>" method="Post">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles publisher">
                                <a class="btn btn-primary" href="<?php echo e(route('Publishers.edit',$Publisher->id)); ?>">تعديل</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="button" class="btn btn-danger">حذف</button>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $Publishers->links(); ?>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraval\login\resources\views/Publishers/index.blade.php ENDPATH**/ ?>