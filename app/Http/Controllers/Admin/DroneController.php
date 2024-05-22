<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Drone;
use Illuminate\Http\Request;

class DroneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drones = Drone::where('not_active', false)->orderBy('created_at', 'DESC')->get();
        return view('admin.drone.index', [
            'drones' => $drones
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.drone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Drone::create($data);
        return redirect()->back()->withSuccess('Дрон успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Drone $drone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drone $drone)
    {
        return view('admin.drone.edit', [
            'drone' => $drone,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drone $drone)
    {
        $data = $request->all();
        $drone->update($data);
        $drone->save();
        return redirect()->back()->withSuccess('Дрон успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drone $drone)
    {
        $drone->not_active=true;
        $drone->save();
        return redirect()->back()->withSuccess('Дрон було успішно видалено!');
    }
}
