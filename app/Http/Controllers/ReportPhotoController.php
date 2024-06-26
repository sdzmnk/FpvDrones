<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\PhotoToGallery;
use App\Models\Gallery;
use Illuminate\Http\Request;

class ReportPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries  = Gallery::where('not_active', false)
        ->where('name', 'photoReport')
        ->with(['photos_to_gallery' => function ($query) {
            $query->where('not_active', false);
        }])
        ->latest()
        ->get();

        $footer = Content::where('html', 'footer')
                        ->latest()
                        ->first();


        return view('ReportPhoto', compact('galleries', 'footer'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
