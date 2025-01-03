<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Formdan kelgan ma'lumotlarni tekshirish
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mavzu' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Ma'lumotlarni olish
        $data = $request->only('name', 'email', 'mavzu', 'message');

        // Mail yuborish
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('recipient@example.com')
                    ->subject("New Contact Form Submission");
        });
        

        // Foydalanuvchiga xabar qaytarish
        return back()->with('success', 'Xabar muvaffaqiyatli yuborildi!');
    }
}
