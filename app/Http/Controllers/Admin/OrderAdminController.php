<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderAdminController extends Controller
{
    //
    public function index()
    {
        $user = '';
        $orderItem = OrderItem::leftJoin('orders', 'orders.id', '=', 'orderItem.order_id')
            ->leftJoin('product', 'product.id', '=', 'orderItem.product_id')
            ->select('orders.total_price','orders.id as idOrder', 'orders.user_id','orders.shipping_address', 'orders.status', 'product.name as product_name', 'orderItem.*')->get();
        foreach ($orderItem as $item) {
            
            $user = User::where('id', $item->user_id)->first();
        }
        
        return view('admin.order.index', compact('orderItem', 'user'))
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
        $orderItem = OrderItem::leftJoin('orders', 'orders.id' . '=' . 'orderItem.order_id')
            ->leftJoin('product', 'product.id' . '=' . 'orderItem.product_id')
            ->select('order.*', 'product.name as product_name', 'orderItem.*')
            ->where('orderItem.order_id', $id)->fisrt();
        $user = User::where('id', $orderItem->user_id)->first();
        return view('admin.order.orderDetail', compact('orderItem', 'user'));
    }
}
