

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Admin Login</h2>
    <form method="POST" action="<?php echo e(route('admin.login')); ?>">
        <?php echo csrf_field(); ?>
        <input name="email" class="form-control mb-2" placeholder="Email" required>
        <input name="password" type="password" class="form-control mb-2" placeholder="Password" required>
        <button type="submit" class="btn btn-dark">Login</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-auth-system\resources\views/auth/admin_login.blade.php ENDPATH**/ ?>