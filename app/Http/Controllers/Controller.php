<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Posting;

class Controller extends BaseController
{
    public function index()
    {
        // Ambil data post informasi dari model Posting
        $posts = Posting::all();
        
        // Kirim data post informasi ke halaman home
        return view('welcome', compact('posts')); // Mem-passing variabel $posts
    }
}
