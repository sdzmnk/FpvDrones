<?php

namespace App\Http\Controllers;
use App\Models\Detail;
use App\Models\Drone;
use App\Models\Content;
use App\Models\Gallery;
use App\Models\PhotoToGallery;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contentData = Content::whereIn('html', ['header', 'overAboutUs', 'aboutUs', 'help', 'needItemTop', 'needItemBottom', 'footer'])
        ->pluck('text', 'html');

        $drones = Drone::with('details')
            ->where('not_active', false)
            ->orderBy('created_at', 'ASC')
            ->get();

        $galleries = Gallery::with('photos_to_gallery')
            ->where('not_active', false)
            ->where('name', 'mainPhotoReport')
            ->get();

        return view('Main', compact('contentData', 'drones', 'galleries'));
    }

    public function saveSelectedDetails(Request $request)
    {
        $selectedDetails = $request->input('selectedDetails');
        $request->session()->put('selectedDetails', $selectedDetails);
        return response()->json(['success' => true]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
