<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentars';

    protected $guarded = [];
    // protected $fillable = [
    //     'konten',
    //     'nama',
    //     'email',
    //     'tanggal_publikasi',
    //     'berita_id',
    //     'status'
    // ];

    public function berita()
    {
        return $this->belongsTo(Berita::class, 'berita_id');
    }
}
