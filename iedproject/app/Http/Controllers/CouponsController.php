<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class CouponsController extends Controller
{
    //
	public function index()
	{
		$user = \Auth::user();
		if ($user->email == 'admin@ied.com')
		{
			$coupons = Coupon::all();
			return view('coupons.index', compact('coupons'));
		}
		else
		{
			$id = $user->id;
			$coupon = Coupon::find($id);
			return view('coupons.show', compact('coupon'));
		}
	}
	
	public function showCoupon(Request $request)
	{
		
		$coupon = Coupon::find($request->id);
		return view('coupons.showCoupon', compact('coupon'));
	}
	
	public function save(Request $request)
	{
		Coupon::where('id','=',$request->id)->update([ 'startbalance' => $request->amount, 'start_date' => $request->sdate]);
	}
	
	public function show($coupon)
	{
		$coupon = Coupon::find($coupon);
		return view('coupons.show', compact('coupon'));
	}
	
	public function destroy(Request $request)
	{
		$coupon = Coupon::find($request->id);
		Coupon::findOrFail($coupon->id)->delete();
		return $this->index();
	}
}
