<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategoris';

    protected $guarded = [];

    // protected $fillable = [
    //     'nama',
    //     'slug'
    // ];

    public function beritas()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }

    public function produks()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
}
