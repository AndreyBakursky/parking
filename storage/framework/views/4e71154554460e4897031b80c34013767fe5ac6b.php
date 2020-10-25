<?php $__env->startSection('title-block'); ?>
  Все автомобили
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <h1>Список автомобилей</h1>
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-info">
      <h3><?php echo e($el->name); ?></h3>
      <p><?php echo e($el->car); ?></p>
      <p><?php echo e($el->carmodel); ?></p>
      <p><small><?php echo e($el->carnumber); ?></small></p>
      <a href="<?php echo e(route('ShowCar', $el->id)); ?>"><button class="btn btn-warning">Подробнее</button></a>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\parking\resources\views\cars.blade.php ENDPATH**/ ?>