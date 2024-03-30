<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;
    protected $table = 'posts'; // Gantilah nama_tabel dengan nama tabel yang sesuai
    protected $fillable = ['id','title', 'description','image_url'];
}
