<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class ProductModel extends Model
{
    use HasFactory;
 
    protected $table = 'table_product';
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'nama', 'deskripsi', 'id_kategori', 'gambar'
    ];
}