<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detail;

class AdminHomeController extends Controller
{
    public function index()
    {
        $details_count = Detail::all()->count();
        return view('admin.home.index', [
            'details_count'=>$details_count]);
    }
}
