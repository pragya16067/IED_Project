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
								</tr>
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