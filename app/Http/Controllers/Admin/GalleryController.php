<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries=Gallery::where('not_active', false)->orderBy('created_at', 'DESC')->get();
        $sections = ['mainPage', 'aboutUs', 'details', 'photoReport'];
        return view('admin.gallery.index', [
            'sections' => $sections,
            'galleries'=>$galleries,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $galleries=Gallery::where('not_active', false)->orderBy('created_at', 'DESC')->get();
        $sections = ['mainPage', 'aboutUs', 'details', 'photoReport'];
        return view('admin.gallery.create', [
            'sections' => $sections,
            'galleries'=>$galleries,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Gallery::create($data);
        return redirect()->back()->withSuccess('Галерею успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $sections = ['mainPage', 'aboutUs', 'details', 'photoReport'];
        return view('admin.gallery.edit', [
            'sections' => $sections,
            'gallery'=>$gallery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $data = $request->all();
        $gallery->update($data);
        $gallery->save();
        return redirect()->back()->withSuccess('Галерею успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->not_active=true;
        $gallery->save();
        return redirect()->back()->withSuccess('Галерею було успішно видалено!');
    }
}
