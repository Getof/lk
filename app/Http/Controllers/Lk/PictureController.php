<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use App\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_t = Auth::id();
        $pictures = Picture::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.picture', [
            'pictures' => $pictures
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
        $path = public_path().'/upload/matfiles/';
        $file = $request->file('file');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move($path,$filename);

        Picture::create([
            'teacher_id'=>Auth::id(),
            'name'=>$request->get('name'),
            'img_name'=>$filename,
            'description'=>$request->get('desc')
        ]);

        $id_t = Auth::id();
        $pictures = Picture::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.picture', [
            'pictures' => $pictures
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        $fl = Picture::find($request->get('id'));

        $fl->update([
            'name' => $request->get('name'),
            'description' => $request->get('desc')
        ]);

        $id_t = Auth::id();
        $pictures = Picture::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.picture', [
            'pictures' => $pictures
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
