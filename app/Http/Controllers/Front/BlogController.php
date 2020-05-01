<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Tasks;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd(Tasks::orderBy('created_at', 'desc')->skip(2)->paginate(10));
        return view('frontend.web.blog', [
           'taskmain'=>Tasks::orderBy('created_at', 'desc')->take(2)->get(),
            'tasks'=>Tasks::orderBy('created_at', 'desc')->offset(2)->paginate(10)
        ]);
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


}
