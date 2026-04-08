<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Conversation;

class ChatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Let's get all conversations this user is part of
        $conversations = $user->conversations()->with(['users', 'messages' => function($q) {
            $q->latest()->limit(1);
        }])->get();

        // Let's also fetch all other users so we can start new chats
        $contacts = User::where('id', '!=', $user->id)->get();

        return view('chat.index', compact('conversations', 'contacts', 'user'));
    }
}
