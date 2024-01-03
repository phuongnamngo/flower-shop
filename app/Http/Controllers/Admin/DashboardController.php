<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $currentYear = Carbon::now()->format('Y');
        $startDateYear = "{$currentYear}-01-01";
        $endDateYear = "{$currentYear}-12-31";
        $totalUser = User::count();
        $totalProducts = Product::where('status', 1)->count();
        $currentMonth = Carbon::now()->format('Y-m');
        $startDate = "{$currentMonth}-01";

        $endDate = date('Y-m-t', strtotime($startDate));
        $totalOrders = Order::whereBetween('created_at', [$startDate, $endDate])->count();
        $totalPriceOrders = Order::whereBetween('created_at', [$startDate, $endDate])->sum('total_price');
        $yearlyTotal = Order::whereBetween('created_at', [$startDateYear, $endDateYear])->sum('total_price');
        $categories = Category::where('status', 1)->orderBy('id', 'desc')->limit(4)->get();
        $products = Product::where('status', 1)->orderBy('id', 'desc')->limit(4)->get();
        return view(
            'admin.home.index',
            compact('totalUser', 'yearlyTotal', 'totalProducts', 'totalOrders', 'totalPriceOrders', 'categories', 'products')
        );
    }
}
