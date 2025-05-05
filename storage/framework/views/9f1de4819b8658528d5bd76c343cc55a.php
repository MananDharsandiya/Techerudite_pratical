

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, <?php echo e(Auth::user()->first_name); ?>!</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-auth-system\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>