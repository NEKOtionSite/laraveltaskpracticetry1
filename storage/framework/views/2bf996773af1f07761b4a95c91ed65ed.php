
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Edit Task</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('task/' .$tasks->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($tasks->id); ?>" id="id" />
        <label>Task Name:</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($tasks->name); ?>" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tasks.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraveltasks-app\resources\views/tasks/edit.blade.php ENDPATH**/ ?>