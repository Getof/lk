<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use App\TaskMat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskMatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_t = Auth::id();
        $tasks = TaskMat::where('teacher_id', '=', $id_t)->get();

        return view('lk.custom.materials.task', [
            'tasks' => $tasks
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskMat  $taskMat
     * @return \Illuminate\Http\Response
     */
    public function show(TaskMat $taskMat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TaskMat  $taskMat
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskMat $taskMat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskMat  $taskMat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskMat $taskMat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskMat  $taskMat
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskMat $taskMat)
    {
        //
    }
}
