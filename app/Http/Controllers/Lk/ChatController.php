<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('role', '=', 'student')->get();

        return view('lk.chat.chat-box', [
            'users' => $users
        ]);
    }

    public function getMessages($user_id)
    {
        $my_id = Auth::id();

        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from_user', $my_id)->where('to_user', $user_id);
        })->orWhere(function ($query) use ($user_id, $my_id) {
            $query->where('from_user', $user_id)->where('to_user', $my_id);
        })->get();

        return view('lk.chat.messages', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {

        $from = Auth::id();
        $to = $request->get('receiver_id');
        $message = $request->get('message');

        $data = new Message();
        $data->from_user = $from;
        $data->to_user = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from_user' => $from, 'to_user' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
