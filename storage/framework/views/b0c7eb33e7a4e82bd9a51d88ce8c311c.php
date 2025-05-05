

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Email Verification</h2>
    <form method="POST" action="<?php echo e(route('verify.form')); ?>">
        <?php echo csrf_field(); ?>
        <input name="email" class="form-control mb-2" placeholder="Email" value="<?php echo e(session('email')); ?>" required>
        <input name="code" class="form-control mb-2" placeholder="Verification Code" required>
        <button type="submit" class="btn btn-success">Verify</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-auth-system\resources\views/auth/verify.blade.php ENDPATH**/ ?>