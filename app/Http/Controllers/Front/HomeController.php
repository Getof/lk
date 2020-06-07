<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Slides;
use App\Tasks;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use MongoDB\Driver\Session;

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
            'slides'=>Slides::orderBy('created_at', 'desc')->get(),
            'tasks'=>Tasks::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function register(Request $request){
        $user = new User();
        $user->name = $request->get('name');
        $user->lastname = $request->get('surname');
        $user->phone = $request->get('tel');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->remember_token = $request->get('_token');
        $user->role = $request->get('type');
        $user->save();
        return \redirect()->route('home');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)){

            return \redirect()->route('home');
        } else {
            \Illuminate\Support\Facades\Session::flush('message', "Invalid Credentials , Please try again.");
            return \redirect()->route('home');
        }

    }

    public function logout(){
        Auth::logout ();
        return \redirect()->route('home');
    }


}
