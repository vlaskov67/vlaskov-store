<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function index()
    {
        return view('chatbot.index');
    }

    public function store(Request $request)
    {
        // Обработка сообщения чат-боту
        return response()->json(['reply' => 'Ответ чат-бота']);
    }
}
