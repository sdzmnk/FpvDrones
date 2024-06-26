<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Instruction;
use App\Models\Detail;
use App\Models\Order;
use App\Models\OrderLine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $selectedDetailIds = $request->session()->get('selectedDetails', []);

        $selectedDetails = Detail::whereIn('id', $selectedDetailIds)->get();

        $instruction = Instruction::where('not_active', false)
                                    ->where('name', 'mainInstruction')
                                    ->with(['steps' => function ($query) {
                                        $query->where('not_active', false);
                                    }])
                                    ->latest()
                                    ->first();
        $user = Auth::user();

        $footer = Content::where('html', 'footer')
                        ->where('not_active', false)
                        ->latest()
                        ->first();

        return view('Instruction', compact('selectedDetails', 'instruction', 'user', 'footer'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->date = now();
        $order->save();

        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'detail_') !== false) {
                $detailId = str_replace('detail_', '', $key);
                $quantity = (int)$value;

                $orderLine = new OrderLine();
                $orderLine->order_id = $order->id;
                $orderLine->detail_id = $detailId;
                $orderLine->quantity_of_detail = $quantity;
                $orderLine->save();
            }
        }

        $request->session()->forget('selectedDetails');

        return response()->json(['success' => true]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Instruction $instruction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instruction $instruction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instruction $instruction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruction $instruction)
    {
        //
    }
}
