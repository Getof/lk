<?php

namespace App\Http\Controllers\Lk;

use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_t = Auth::id();
        $files = File::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.file', [
            'files' => $files
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

        File::create([
            'teacher_id'=>Auth::id(),
            'name'=>$request->get('name'),
            'file_name'=>$filename,
            'ext_img'=>$file->getClientOriginalExtension()
        ]);

        $id_t = Auth::id();
        $files = File::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.file', [
            'files' => $files
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        $fl = File::find($request->get('id'));

        $fl->update([
           'name' => $request->get('name'),
           'description' => $request->get('desc')
        ]);

        $id_t = Auth::id();
        $files = File::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.file', [
            'files' => $files
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
