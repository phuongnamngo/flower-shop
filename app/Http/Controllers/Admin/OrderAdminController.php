<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ReturnUrlModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderAdminController extends Controller
{
    //
    public function index()
    {
        $user = '';
        $order = Order::leftJoin('users', 'users.id', '=', 'orders.user_id')
            ->leftJoin('return_url_momo', 'return_url_momo.orderId', '=', 'orders.id_order_momo')
            ->select('orders.*', 'users.name', 'users.email', 'return_url_momo.message')->get();
        return view('admin.order.index', compact('order'))
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
        $user = '';
        $orderItem = OrderItem::leftJoin('orders', 'orders.id', '=', 'orderItem.order_id')
            ->leftJoin('product', 'product.id', '=', 'orderItem.product_id')
            ->select('orders.total_price', 'orders.payment_method', 'orders.id_order_momo', 'orders.billing_address', 'orders.id as idOrder', 'orders.user_id', 'orders.shipping_address', 'orders.status', 'product.name as product_name', 'orderItem.*')
            ->where('orderItem.order_id', $id)
            ->first();
        $user = User::where('id', $orderItem->user_id)->first();
        $momoItem = ReturnUrlModel::where('orderId', $orderItem->id_order_momo)->first();
        return view('admin.order.orderDetail', compact('orderItem', 'user', 'momoItem'));
    }
}
