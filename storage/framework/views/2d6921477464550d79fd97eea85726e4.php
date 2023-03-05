
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Add Tasks</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('task')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Task Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tasks.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraveltasks-app\resources\views/tasks/create.blade.php ENDPATH**/ ?>