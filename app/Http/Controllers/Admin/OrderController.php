<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('not_active', false)->orderBy('created_at', 'desc')->get();
        $orders = Order::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.order.index',[
            'users'=>$users,
            'orders'=>$orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.order.create',[
            'users'=>$users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Order::create($data);
        return redirect()->back()->withSuccess('Замовлення успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $users = User::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.order.edit',[
            'order'=>$order,
            'users'=>$users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $data = $request->all();
        $order->update($data);
        $order->save();
        return redirect()->back()->withSuccess('Замовлення успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->not_active=true;
        $order->save();
        return redirect()->back()->withSuccess('Замовлення було успішно видалено!');
    }
}
