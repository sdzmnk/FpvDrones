<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use App\Models\InstructionStep;
use Illuminate\Http\Request;

class InstructionStepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructionSteps = InstructionStep::where('not_active', false)->orderBy('created_at', 'desc')->get();
        $instructions = Instruction::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.instruction_step.index',[
            'instructionSteps'=>$instructionSteps,
            'instructions'=>$instructions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructions = Instruction::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.instruction_step.create',[
            'instructions'=>$instructions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        InstructionStep::create($data);
        return redirect()->back()->withSuccess('Крок успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(InstructionStep $instructionStep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InstructionStep $instructionStep)
    {
        $instructions = Instruction::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.instruction_step.edit',[
            'instructionStep'=>$instructionStep,
            'instructions'=>$instructions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InstructionStep $instructionStep)
    {
        $data = $request->all();
        $instructionStep->update($data);
        $instructionStep->save();
        return redirect()->back()->withSuccess('Крок успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InstructionStep $instructionStep)
    {
        $instructionStep->not_active=true;
        $instructionStep->save();
        return redirect()->back()->withSuccess('Крок було успішно видалено!');
    }
}
