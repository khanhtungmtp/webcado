<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChatRequest;
use App\Models\Chat;
use App\Models\UserChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChatController extends Controller
{
    public function getMessages()
    {
        $idUserChat = Session::get('userIDChated');
        // lấy tất cả tin nhắn của người chat
        $chats = Chat::with('user')->where('user_chat_id', $idUserChat)->get();
        return $chats;
    }

    public function postMessages(Request $request)
    {
            $chated = Chat::create([
                'user_chat_id' => $request->chatUserID,
                'chat_content' => $request->chatContent
            ]);
            return response()->json($chated);
    }

    public function getUserCurrentChat()
    {
        if (Session::has('userChated')) {
            return response()->json(['idUserChat' => Session::get('userIDChated'), 'emailUserChat' => Session::get('userChated')]);
        }
    }

    public function userInfo(ChatRequest $request)
    {
        $result = UserChat::create([
            'chat_name'  => $request->chatName,
            'chat_email' => $request->chatEmail,
        ]);
        if ($result)
        {
            Session::put('userChated', $result->chat_email);
            Session::put('userIDChated', $result->user_chat_id);
        }
        return response()->json($result);
    }
}
