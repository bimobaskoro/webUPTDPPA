<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendEmail;

class emailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required',
            'title' => 'required',
        ]);

        $message = $validatedData['message'];
        $title = $validatedData['title'];
        $email = 'malditaajip06@gmail.com'; // Alamat email yang ditentukan secara langsung

        // Kirim email menggunakan Laravel Mail
        Mail::to($email)->send(new SendEmail($title, $message));

        return redirect()->back()->with('success', 'Email berhasil dikirim!');
    }
}