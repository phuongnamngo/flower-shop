<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderAdminController extends Controller
{
    //
    public function index()
    {
        $orders = Order::get();
        return view('admin.order.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function updateStatus(Request $request)
    {
        $order = Order::find($request->id);
        $order->status = $request->status;
        $order->save();
        return response()->json(['message' => 'Status updated successfully.']);
    }
    public function orderDetail($id): View
    {
        $order = Order::where('id', $id)->first();
        return view('admin.order.orderDetail')->with('order', $order);
    }
}
