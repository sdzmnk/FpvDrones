<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Drone;
use App\Models\LinkToDetail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Detail::where('not_active', false)->orderBy('created_at', 'DESC')->get();
        return view('admin.detail.index', [
            'details' => $details
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drones = Drone::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.detail.create', [
            'drones' => $drones,
        ]);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Detail::create($data);
        return redirect()->back()->withSuccess('Деталь успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail $detail)
    {
        $drones = Drone::where('not_active', false)->orderBy('created_at', 'desc')->get();

        return view('admin.detail.edit', [
            'drones' => $drones,
            'detail' => $detail,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        $data = $request->all();
        $detail->update($data);
        $detail->save();
        return redirect()->back()->withSuccess('Деталь успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        $detail->not_active=true;
        $detail->save();
        return redirect()->back()->withSuccess('Деталь було успішно видалено!');
    }
}
