<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\LinkToDetail;
use Illuminate\Http\Request;

class LinkToDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $linksToDetail = LinkToDetail::where('not_active', false)->orderBy('created_at', 'desc')->get();
        $details = Detail::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.link_to_detail.index',[
            'linksToDetail'=>$linksToDetail,
            'details'=>$details,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $details = Detail::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.link_to_detail.create',[
            'details'=>$details,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        LinkToDetail::create($data);
        return redirect()->back()->withSuccess('Посилання успішно додано!');
    }

    /**
     * Display the specified resource.
     */
    public function show(LinkToDetail $linkToDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LinkToDetail $linkToDetail)
    {
        $details = Detail::where('not_active', false)->orderBy('created_at', 'desc')->get();
        return view('admin.link_to_detail.edit',[
            'linkToDetail'=>$linkToDetail,
            'details'=>$details,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LinkToDetail $linkToDetail)
    {
        $data = $request->all();
        $linkToDetail->update($data);
        $linkToDetail->save();
        return redirect()->back()->withSuccess('Посилання успішно оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LinkToDetail $linkToDetail)
    {
        $linkToDetail->not_active=true;
        $linkToDetail->save();
        return redirect()->back()->withSuccess('Посилання було успішно видалено!');
    }
}
