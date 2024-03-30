<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;

class informationController extends Controller
{
    public function index(){
        return view('information');
    }

    public function show($id)
    {
        $posting = Posting::findOrFail($id); // Menemukan posting berdasarkan ID, atau mengembalikan 404 jika tidak ditemukan
        return view('news', compact('posting')); // Mengirim data posting ke halaman detail untuk ditampilkan
    }
}
