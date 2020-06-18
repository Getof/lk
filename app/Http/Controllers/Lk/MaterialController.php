<?php

namespace App\Http\Controllers\Lk;

use App\File;
use App\Http\Controllers\Controller;
use App\Link;
use App\Picture;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {

        $fileCount = File::all()->count();
        $pictCount = Picture::all()->count();
        $linkCount = Link::all()->count();
        return view('lk.teacher.material', [
            'fileCount' => $fileCount,
            'pictCount' => $pictCount,
            'linkCount' => $linkCount
        ]);
    }
}
