<?php

namespace App\Models;

use Attribute;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'beritas';
    protected $fillable = ['user_id', 'kategori_id', 'judul', 'isi', 'gambar'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
