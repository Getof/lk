<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('role', '=', 'student')->get();

        return view('lk.chat.chat-box', [
            'users' => $users
        ]);
    }
}
