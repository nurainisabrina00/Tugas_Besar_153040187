<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model {

    use HasFactory;

    protected $table = "table_blog";
    protected $primaryKey = 'id_blog';
    
    protected $fillable = [
        'id_blog', 'judul', 'isi', 'gambar', 'penulis', 'tahun_penerbit'
    ];

}
