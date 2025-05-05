

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Admin Registration</h2>
    <form method="POST" action="<?php echo e(route('admin.register')); ?>">
        <?php echo csrf_field(); ?>
        <input name="first_name" class="form-control mb-2" placeholder="First Name" required>
        <input name="last_name" class="form-control mb-2" placeholder="Last Name" required>
        <input name="email" type="email" class="form-control mb-2" placeholder="Email" required>
        <input name="password" type="password" class="form-control mb-2" placeholder="Password" required>
        <input name="password_confirmation" type="password" class="form-control mb-2" placeholder="Confirm Password" required>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-auth-system\resources\views/auth/admin_register.blade.php ENDPATH**/ ?>