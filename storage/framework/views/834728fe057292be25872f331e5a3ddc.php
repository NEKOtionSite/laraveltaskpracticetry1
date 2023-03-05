
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Tasks List</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Task Name : <?php echo e($tasks->name); ?></h5>

  </div>
      
    </hr>
  
  </div>
</div>
<?php echo $__env->make('tasks.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraveltasks-app\resources\views/tasks/show.blade.php ENDPATH**/ ?>