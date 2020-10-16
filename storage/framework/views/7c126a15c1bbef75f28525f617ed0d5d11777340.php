<?php $__env->startSection('Title',$title); ?>

<?php $__env->startSection('content'); ?>

<section class="profile-section" style="width: 70%">

    <h1>
        لیست سفارشات
    </h1>
    <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

    <div class="card">

        <div class="card-body" style="overflow-x:auto;">

            <table id="example1" >
                <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>شماره سفارش</th>
                        <th>زمان ثبت سفارش</th>
                        <th>وضعیت سفارش</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e(($key+1)); ?></td>
                        <td><?php echo e($item->transaction_code); ?></td>
                        <td><?php echo e(\Morilog\Jalali\Jalalian::forge($item->created_at)->format('%B %d، %Y')); ?></td>
                        <td>
                            <?php if($item->success == '1'): ?>
                            <span class="text-success">موفق</span>
                            <?php else: ?>
                            <span class="text-danger">ناموفق</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>

        </div>
    </div>



</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script src="<?php echo e(asset('assets/vendors/dataTable/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/dataTable/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/dataTable/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/examples/datatable.js')); ?>"></script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\tvsione\resources\views/Front/orders.blade.php ENDPATH**/ ?>