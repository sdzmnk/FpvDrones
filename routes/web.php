<?php

use App\Models\PhotoToGallery;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});


Route::post('/photo_test', function(\Illuminate\Http\Request $request){
    if($request->hasFile('file')){
        $photo_to_gallery = PhotoToGallery::find(1);
        $photo_to_gallery->addMedia($request->file('file'))->toMediaCollection('images');
    }
})->name('photo');
