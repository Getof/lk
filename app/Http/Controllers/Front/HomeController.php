<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Slides;
use App\Tasks;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.web.index', [
            'slides'=>Slides::all(),
            'tasks'=>Tasks::all()
        ]);
    }


}
