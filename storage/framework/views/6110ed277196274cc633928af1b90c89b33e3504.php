<?php $__env->startSection('content'); ?>
<!--End Navbar-->


<!--Start section-one-->

<section class="section-one text-center">
    <div class="container">
        <div class="content-me">
            <h2> أهلا بك فى جدول كتاب</h2>
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
        <a href="<?php echo e(route('Books.create')); ?>" class="btn btn-success btn-sm float-end">اضاف كتاب</a>
        <br><br>
        <table class="table table  table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">صورة الكتاب</th>
                    <th scope="col">اسم الكتاب</th>
                    <th scope="col">رقم الاصدر</th>
                    <th scope="col">اسم الكاتب </th>
                    <th scope="col">اسم الناشر</th>
                    <th scope="col">الجنس</th>
                    <th scope="col">تعديل والحذف</th>
            </thead>
            <tbody>
                <?php if(count($Book) > 0): ?>

                <?php $__currentLoopData = $Book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($row->id); ?></th>
                    <td><img src="<?php echo e(asset('images/' . $row->book_image)); ?>" width="75" /></td>
                    <td><?php echo e($row->book_name); ?></td>
                    <td><?php echo e($row->book_id); ?></td>
                    <td><?php echo e($row->Writers); ?></td>
                    <td><?php echo e($row->Publishers); ?></td>
                    <td><?php echo e($row->gender); ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <form method="post" action="<?php echo e(route('Books.destroy', $row->id)); ?>">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <a href="<?php echo e(route('Books.edit', $row->id)); ?>" class="btn btn-warning btn-sm">تعديل</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="حذف" />
                            </form>

                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <?php echo $Book->links(); ?>

    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraval\login\resources\views/Books/index.blade.php ENDPATH**/ ?>