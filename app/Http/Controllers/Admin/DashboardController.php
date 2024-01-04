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
        $currentMonthNow = Carbon::now()->month;
        $endDate = date('Y-m-t', strtotime($startDate));
        $totalOrders = Order::whereBetween('created_at', [$startDate, $endDate])->count();
        $totalPriceOrders = Order::whereBetween('created_at', [$startDate, $endDate])->sum('total_price');
        $yearlyTotal = Order::whereBetween('created_at', [$startDateYear, $endDateYear])->sum('total_price');
        $categories = Category::where('status', 1)->orderBy('id', 'desc')->limit(4)->get();
        $products = Product::where('status', 1)->orderBy('id', 'desc')->limit(4)->get();

        $revenueData = Order::selectRaw('MONTH(created_at) as month, SUM(total_price) as total')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        $labels = [];
        $data = [];
        $vietnameseMonths = [
            'Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
            'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'
        ];
        $defaultMonths = range(1, 12);
        foreach ($defaultMonths as $month) {
            $labels[] = $vietnameseMonths[$month - 1]; // Giảm 1 vì mảng bắt đầu từ 0
            $data[] = $revenueData->where('month', $month)->first()->total ?? 0;
        }
        return view(
            'admin.home.index',
            compact('labels', 'data', 'totalUser', 'currentMonthNow', 'currentYear', 'yearlyTotal', 'totalProducts', 'totalOrders', 'totalPriceOrders', 'categories', 'products')
        );
    }
}
