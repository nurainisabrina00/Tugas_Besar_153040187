<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class ImageBlogModel extends Model
{
    use HasFactory;
 
    protected $table = 'table_gambar_blog';
    protected $primaryKey = 'id_gambar_blog';

    protected $fillable = [
        'id_gambar_blog', 'nama_file', 'deskripsi', 'id_blog'
    ];
}