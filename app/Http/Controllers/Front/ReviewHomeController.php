<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Version;

class ReviewHomeController extends Controller
{
    public function getReview(Request $request){

        $reviews = Review::where('role', 'teacher')->orderBy('created_at', 'desc')->paginate(3);

        if ($request->ajax()){
            $view = view('frontend.web.partial.rew', compact('reviews'))->render();
            return response()->json(['html'=>$view]);
        }

        return view('frontend.web.reviews', compact('reviews'));


    }
}
