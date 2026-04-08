<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Authorize access to a conversation channel
Broadcast::channel('chat.{conversationId}', function ($user, $conversationId) {
    // Only allow participants to connect to this channel
    return $user->conversations()->where('conversation_id', $conversationId)->exists();
});
