<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting; // Gantilah YourModel dengan nama model yang sesuai
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class EditorController extends Controller
{
    public function store(Request $request){
        // Validasi formulir jika diperlukan
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar (opsional)
        ]);
    
        // Simpan gambar ke storage
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images-post', $imageName);
    
            // Simpan data ke dalam database
            $posting = new Posting(); // Gantilah YourModel dengan nama model yang sesuai
            $posting->title = $validatedData['title'];
            $posting->description = $validatedData['description'];
            $posting->description = nl2br($validatedData['description']); 

            $cleanedDescription = strip_tags($validatedData['description'], '<br>'); // Mengizinkan tag <br> tetap ada
            $posting->description = $cleanedDescription;

            $posting->image_url = $imageName; // Simpan nama file gambar ke dalam kolom image_url
            $posting->save();
        } else {
            Log::error('Bidang gambar harus diisi.');

            return redirect()->back()->withErrors(['image' => 'Bidang gambar harus diisi.'])->withInput();
        }
    
        // Redirect atau lakukan sesuatu setelah penyimpanan
        return redirect()->route('upload')->with('success', 'Post berhasil disimpan!');
    }

    public function uploadImage (Request $request){
        if ($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
