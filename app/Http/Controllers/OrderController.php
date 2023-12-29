<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function show($orderId)
    {
        $order = Order::leftJoin('users', 'users.id' , '=' , 'orders.user_id')
            ->leftJoin('orderitem', 'orderitem.order_id' , '=' , 'orders.id')
            ->select('users.name as user_name', 'users.email as user_email', 'orderitem.*', 'orders.*')
            ->where('orders.id', $orderId)->first();
        
        return view('main.payment.index', compact('order'));
    }
    public function getAllOrder()
    {
        $user = Auth::user();

        $orderHistory = $user->orders;
        // dd( $orderHistory->toArray());   
        return view('main.orderHistory.index',compact('orderHistory'));
    }
    public function edit($id)
    {
        
        $order = Order::leftJoin('users', 'users.id' , '=' , 'orders.user_id')
            ->leftJoin('orderitem', 'orderitem.order_id' , '=' , 'orders.id')
            ->select('users.name as user_name', 'users.email as user_email', 'orderitem.*', 'orders.*')
            ->where('orders.id', $id)->get();
            // dd( $orders->toArray());

        return view('main.orders.edit', compact('order'));
    }
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        if ($order->status == 1) {
            return redirect()->route('orders.edit', $id)
                ->with('error', 'Không thể sửa đơn hàng có trạng thái là 1.');
        }
        $order->update([
            'shipping_address' => $request->input('shipping_address'),
            'billing_address' => $request->input('billing_address'),
            'payment_method' => $request->input('payment_method'),
        ]);

        return redirect()->route('order.history')
            ->with('error', 'Update Successfuly.');
    }
}
