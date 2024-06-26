<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Content::orderBy('html', 'desc')->get();
        return view('admin.content.index', [
            'contents'=>$contents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Content::create($data);
        return redirect()->back()->withSuccess('Контент успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        return view('admin.content.edit', [
            'content'=>$content
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        $data = $request->all();
        $content->update($data);
        $content->save();
        return redirect()->back()->withSuccess('Текст успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        $content->not_active=true;
        $content->save();
        return redirect()->back()->withSuccess('Контент було успішно видалено!');
    }

}
