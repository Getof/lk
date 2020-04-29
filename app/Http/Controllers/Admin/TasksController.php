<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tasks;
use Illuminate\Http\Request;
use Intervention\Image\Image;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.web.layout.task', [
            'tasks'=>Tasks::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.web.layout.tscreate', [
            'task' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = public_path().'/upload/imgtasks/';
        $file = $request->file('img');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move($path,$filename);


        Tasks::create([
            'title'=>$request->get('title'),
            'body'=>$request->get('body'),
            'img'=>$filename
        ]);

        return redirect()->route('admin.tasks.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $task=Tasks::find($id);

        return view('backend.web.layout.tsedit', ['task'=> $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $ts=Tasks::find($id);

        $path = public_path().'/upload/imgtasks/';
        $file = $request->file('img');

        if ((($ts->img) != $file) && ($file != null)){
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move($path,$filename);
        } else {
            $filename = $ts->img;
        }
        $ts->update([
            'title'=>$request->get('title'),
            'body'=>$request->get('body'),
            'img'=>$filename
        ]);

        return redirect()->route('admin.tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $ts=Tasks::find($id);
        $ts->delete();

        return redirect()->route('admin.tasks.index');
    }
}
