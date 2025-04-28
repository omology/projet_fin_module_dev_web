<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class messageController extends Controller
{
    //
    public function store(Request $request) {
        $validate_data = $request->validate([
            'name'=>"required|min:3|max:15",
            'email'=>"required|email",
            'message'=>"required"

        ]);
        if($validate_data){
            Message::create([
                'name' => $request->name,
                'email'=> $request->email,
                'message'=>$request->message,
            ]);
            return response()->json([
                'message' => 'Message sent successfully'
            ]);
        
        }
    }
}
