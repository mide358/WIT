<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ChatController extends Controller
{
    public function index(?string $slug = null)
    {
        $getUsers = $this->getUsers();
        $getChats = $this->getChats($slug);
        $receiver = User::whereSlug($slug)->first();
        return view('frontend.pages.chat', ['users' => $getUsers, 'chats' => $getChats, 'receiver' => $receiver]);
    }

    private function getUsers()
    {
        return Chat::where('sender_id', 100)
            ->orWhere('receiver_id', 100)
            ->groupBy('sender_id', 'receiver_id')
            ->selectRaw('CASE
                WHEN sender_id = ' . 100 . ' THEN receiver_id
                ELSE sender_id
                END AS sender_id')
            ->with('sender', 'recipient')
            ->get();
    }

    private function getChats($slug)
    {
        $currentUser = auth()->user(); // Get the authenticated user
        $user = User::whereSlug($slug)->first();
        if(!empty($slug) && $user) {
            // Fetch chat messages between the current user and the selected user
            return Chat::where(function ($query) use ($currentUser, $user) {
                $query->where('sender_id', $currentUser->id)
                    ->where('receiver_id', $user->id);
            })->orWhere(function ($query) use ($currentUser, $user) {
                $query->where('sender_id', $user->id)
                    ->where('receiver_id', $currentUser->id);
            })->orderBy('created_at', 'asc')->get();
        }
        return null;
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);


        // Create a new chat message
        $chat = new Chat();
        $chat->sender_id = auth()->id();
        $chat->uuid = Uuid::uuid4()->toString();
        $chat->receiver_id = $validatedData['receiver_id'];
        $chat->message = $validatedData['message'];
        $chat->save();

        return redirect()->back()->with('success', 'sent');
    }

}
