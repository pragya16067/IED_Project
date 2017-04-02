@extends('layouts.app')

@section('content')
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
									<td> {{$coupon->id}} </td>
									<td> {{$coupon->name}} </td>
									<td> {{$coupon->rfid}} </td>
									<td> {{$coupon->rollno}} </td>
									<td> {{$coupon->startbalance}} </td>
									<td> {{$coupon->start_date}} </td>
									<td> {{$coupon->end_date}} </td>
									<td> {{$coupon->breakfast}} </td>
									<td> {{$coupon->lunch}} </td>
									<td> {{$coupon->snacks}} </td>
									<td> {{$coupon->dinner}}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

