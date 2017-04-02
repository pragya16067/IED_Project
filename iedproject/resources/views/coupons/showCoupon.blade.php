@extends('layouts.app')

@section('content')
<form action="/coupons/{{$coupon->id}}" method="POST">
<input type="hidden" name="id" value="{{ $coupon->id }}">
  <div class="form-group">
    <label for="Amount" >Amount Paid:</label>
    <input type="text" class="form-control" name="amount">
  </div>
  <div class="form-group">
    <label for="StartDate">Date:</label>
    <input type="date" class="form-control" name="sdate">
  </div>
 {{ csrf_field() }}
  <button type="submit" class="btn btn-default">Save</button>
</form>
@endsection

