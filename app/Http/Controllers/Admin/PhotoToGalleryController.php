<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\PhotoToGallery;
use Illuminate\Http\Request;

class PhotoToGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::where('not_active', false)->orderBy('created_at', 'DESC')->get();
        $photosToGallery = PhotoToGallery::where('not_active', false)->orderBy('created_at', 'DESC')->get();

        return view('admin.photo_to_gallery.index', [
            'galleries' => $galleries,
            'photosToGallery'=>$photosToGallery,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $photosToGallery = PhotoToGallery::where('not_active', false)->orderBy('created_at', 'DESC')->get();
        $galleries = Gallery::where('not_active', false)->orderBy('created_at', 'DESC')->get();
        return view('admin.photo_to_gallery.create', [
            'galleries' => $galleries,
            'photosToGallery'=>$photosToGallery,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        PhotoToGallery::create($data);
        return redirect()->back()->withSuccess('Фото успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PhotoToGallery $photoToGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhotoToGallery $photoToGallery)
    {
        $galleries = Gallery::where('not_active', false)->orderBy('created_at', 'DESC')->get();

        return view('admin.photo_to_gallery.edit', [
            'galleries' => $galleries,
            'photoToGallery' => $photoToGallery,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhotoToGallery $photoToGallery)
    {
        $data = $request->all();
        $photoToGallery->update($data);
        $photoToGallery->save();
        return redirect()->back()->withSuccess('Фото успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhotoToGallery $photoToGallery)
    {
        $photoToGallery->not_active=true;
        $photoToGallery->save();
        return redirect()->back()->withSuccess('Фото було успішно видалено!');
    }
}
