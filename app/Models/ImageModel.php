<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class ImageModel extends Model
{
    use HasFactory;
 
    protected $table = 'table_gambar';
    protected $primaryKey = 'id_gambar_product';

    protected $fillable = [
        'id_gambar_product', 'nama_file', 'deskripsi', 'id_product'
    ];
}