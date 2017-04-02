<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
				<div class="panel-heading">Coupons</div>
				<div class="panel-body">
				
					<div class="table-responsive">          
						<table class="table table-hover">
							<thead>
							  <tr>
								<th>Id</th>
								<th>Name</th>
								<th>RFID</th>
								<th>Roll No</th>
								<th>Start Balance</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Breakfast</th>
								<th>Lunch</th>
								<th>Snacks</th>
								<th>Dinner</th>
								<th>Actions</th>
							  </tr>
							</thead>
							<tbody>
							
								<?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td> <?php echo e($coupon->id); ?> </td>
										<td> <?php echo e($coupon->name); ?> </td>
										<td> <?php echo e($coupon->rfid); ?> </td>
										<td> <?php echo e($coupon->rollno); ?> </td>
										<td> <?php echo e($coupon->startbalance); ?> </td>
										<td> <?php echo e($coupon->start_date); ?> </td>
										<td> <?php echo e($coupon->end_date); ?> </td>
										<td> <?php echo e($coupon->breakfast); ?> </td>
										<td> <?php echo e($coupon->lunch); ?> </td>
										<td> <?php echo e($coupon->snacks); ?> </td>
										<td> <?php echo e($coupon->dinner); ?></td>
										<td>
											<form action="coupons/<?php echo e($coupon->id); ?>/edit" method="GET">
												<input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">
												<?php echo e(csrf_field()); ?>

											
												<input type="submit" class="btn btn-default" aria-label="Left Align" value="Edit">
													
											</form>
											<form action="coupons/<?php echo e($coupon->id); ?>" method="POST">
												<input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">
												<?php echo e(csrf_field()); ?>

												<?php echo e(method_field('DELETE')); ?>

											
												<input type="submit" class="btn btn-default" aria-label="Left Align" value="Delete">
													
											</form>
										</td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							</tbody>
						</table>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>