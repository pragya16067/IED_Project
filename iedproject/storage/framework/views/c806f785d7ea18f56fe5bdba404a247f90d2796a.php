<?php $__env->startSection('content'); ?>
<form action="/coupons/<?php echo e($coupon->id); ?>" method="POST">
<input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">
  <div class="form-group">
    <label for="Amount" >Amount Paid:</label>
    <input type="text" class="form-control" name="amount">
  </div>
  <div class="form-group">
    <label for="StartDate">Date:</label>
    <input type="date" class="form-control" name="sdate">
  </div>
 <?php echo e(csrf_field()); ?>

  <button type="submit" class="btn btn-default">Save</button>
</form>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>