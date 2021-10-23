<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat_widget_message_text()
    {
      dd(request()->chat_widget_message_text);
    }
}
