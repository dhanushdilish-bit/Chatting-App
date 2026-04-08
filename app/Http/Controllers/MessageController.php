<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'conversation_id' => 'required|exists:conversations,id',
            'content' => 'required|string',
            'attachment' => 'nullable|file|max:5120' // 5MB max
        ]);

        $conversation = Conversation::findOrFail($request->conversation_id);

        // Security check: must be a participant
        if (!$conversation->participants()->where('user_id', Auth::id())->exists()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $path = null;
        if ($request->hasFile('attachment')) {
            $path = $request->file('attachment')->store('attachments', 'public');
        }

        $message = Message::create([
            'conversation_id' => $conversation->id,
            'user_id' => Auth::id(),
            'content' => $request->content,
            'attachment_path' => $path
        ]);
        
        $message->load('user');

        broadcast(new MessageSent($message))->toOthers();

        return response()->json(['message' => $message]);
    }
    
    public function getMessages(Request $request, Conversation $conversation) 
    {
        // Security check
        if (!$conversation->participants()->where('user_id', Auth::id())->exists()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
        
        $messages = $conversation->messages()->with('user')->get();
        return response()->json(['messages' => $messages]);
    }
    
    // Creates a new conversation or fetches existing 1on1 conversation
    public function startChat(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);
        
        $targetUserId = $request->user_id;
        $myId = Auth::id();
        
        // Find existing 1on1 conversation
        $conversation = Conversation::where('is_group', false)
            ->whereHas('participants', function($q) use ($myId) {
                $q->where('user_id', $myId);
            })
            ->whereHas('participants', function($q) use ($targetUserId) {
                $q->where('user_id', $targetUserId);
            })
            ->first();
            
        if (!$conversation) {
            $conversation = Conversation::create([
                'is_group' => false,
                'name' => null
            ]);
            
            $conversation->participants()->createMany([
                ['user_id' => $myId],
                ['user_id' => $targetUserId],
            ]);
        }
        
        return response()->json([
            'conversation' => $conversation->load('users')
        ]);
    }
}
