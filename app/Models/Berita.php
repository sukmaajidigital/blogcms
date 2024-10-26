<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';
    protected $guarded = [];

    // protected $fillable = [
    //     'judul',
    //     'slug',
    //     'isi',
    //     'tanggal_publikasi',
    //     'kategori_id',
    //     'gambar',
    //     'penulis',
    //     'status',
    //     'meta_title',
    //     'meta_description',
    //     'meta_keywords',
    //     'views'
    // ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function komentars()
    {
        return $this->hasMany(Komentar::class, 'berita_id');
    }
}
