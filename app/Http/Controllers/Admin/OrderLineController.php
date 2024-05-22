<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\OrderLine;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderLineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where('not_active', false)->orderBy('created_at', 'desc')->get();
        $orderLines = OrderLine::where('not_active', false)->orderBy('created_at', 'desc')->get();
        $details = Detail::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.order_line.index',[
            'orders'=>$orders,
            'orderLines'=>$orderLines,
            'details'=>$details,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders = Order::where('not_active', false)->orderBy('created_at', 'desc')->get();
        $details = Detail::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.order_line.create',[
            'orders'=>$orders,
            'details'=>$details,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        OrderLine::create($data);
        return redirect()->back()->withSuccess('Деталі замовлення успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderLine $orderLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderLine $orderLine)
    {
        $orders = Order::where('not_active', false)->orderBy('created_at', 'desc')->get();
        $details = Detail::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.order_line.edit',[
            'orderLine'=>$orderLine,
            'orders'=>$orders,
            'details'=>$details,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderLine $orderLine)
    {
        $data = $request->all();
        $orderLine->update($data);
        $orderLine->save();
        return redirect()->back()->withSuccess('Деталі замовлення успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderLine $orderLine)
    {
        $orderLine->not_active=true;
        $orderLine->save();
        return redirect()->back()->withSuccess('Деталі замовлення було успішно видалено!');
    }
}
