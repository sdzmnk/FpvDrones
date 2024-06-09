<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Order;
use App\Models\User;
use App\Models\Drone;


class AdminHomeController extends Controller
{
    public function index()
    {
        $details_count = Detail::where('not_active', false)->count();
        $users_count = User::where('not_active', false)->count();
        $orders_count = Order::where('not_active', false)->count();
        $drones_count = Drone::where('not_active', false)->count();
        return view('admin.home.index', compact('details_count', 'users_count', 'orders_count', 'drones_count'));
    }
}
