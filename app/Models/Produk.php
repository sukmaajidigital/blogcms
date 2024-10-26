<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $guarded = [];

    // protected $fillable = [
    //     'nama',
    //     'slug',
    //     'deskripsi',
    //     'harga',
    //     'stok',
    //     'gambar',
    //     'kategori_id',
    //     'meta_title',
    //     'meta_description',
    //     'meta_keywords',
    //     'views'
    // ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
