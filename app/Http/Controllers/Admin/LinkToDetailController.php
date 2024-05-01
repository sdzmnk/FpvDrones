<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LinkToDetail;
use Illuminate\Http\Request;

class LinkToDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $linksToDetail = LinkToDetail::orderBy('created_at', 'desc')->get();
        return view('admin.link_to_detail.index',[
            'linksToDetail'=>$linksToDetail
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.link_to_detail.create');
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
        return view('admin.link_to_detail.edit',[
            'linkToDetail'=>$linkToDetail
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
        $linkToDetail->delete();
        return redirect()->back()->withSuccess('Посилання було успішно видалено!');
    }
}
