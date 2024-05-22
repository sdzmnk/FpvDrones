<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use Illuminate\Http\Request;

class AdminInstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructions = Instruction::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.instruction_admin.index',[
            'instructions'=>$instructions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.instruction_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Instruction::create($data);
        return redirect()->back()->withSuccess('Інструкцію успішно додано!');
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
        return view('admin.instruction_admin.edit', compact('instruction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instruction $instruction)
    {
        $data = $request->all();
        $instruction->update($data);
        $instruction->save();
        return redirect()->back()->withSuccess('Інструкцію успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruction $instruction)
    {
        $instruction->not_active=true;
        $instruction->save();
        return redirect()->back()->withSuccess('Інструкцію було успішно видалено!');
    }
}
