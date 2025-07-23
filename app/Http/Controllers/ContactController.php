<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string',
            'phone' => 'required|string',
            'job' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        Mail::raw(
            "پیام جدید از فرم تماس:\n\nنام: {$validated['name']}\nشماره: {$validated['phone']}\nحوزه فعالیت: {$validated['job']}\n\nپیام:\n{$validated['message']}",
            function ($message) {
                $message->to('aminshayan0427@gmail.com')
                ->subject('پیام جدید از سایت');
            }
        );

        return response()->json(['success' => true]);
    }
}
