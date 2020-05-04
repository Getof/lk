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
        $tm = Tasks::orderBy('created_at', 'desc')->take(2)->get();
        $ts = Tasks::orderBy('created_at', 'desc')->paginate(10);
        $ts2 = $ts->slice(2);
        $ts2->all();
//        dd($ts2);
        return view('frontend.web.blog', [
           'taskmain'=>$tm,
            'tasks'=>$ts2
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

        return view('frontend.web.post',[
           'post'=>Tasks::find($id)
        ]);
    }


}
