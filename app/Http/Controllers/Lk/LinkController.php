<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use App\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_t = Auth::id();
        $links = Link::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.link', [
            'links' => $links
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Link::create([
            'teacher_id'=>Auth::id(),
            'name'=>$request->get('name'),
            'link'=>$request->get('link')
        ]);

        $id_t = Auth::id();
        $links = Link::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.link', [
            'links' => $links
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $fl = Link::find($request->get('id'));

        $fl->update([
            'name' => $request->get('name'),
            'link' => $request->get('link')
        ]);

        $id_t = Auth::id();
        $links = Link::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.link', [
            'links' => $links
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
    }
}
