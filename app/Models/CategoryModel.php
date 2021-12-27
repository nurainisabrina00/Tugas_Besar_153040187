<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class CategoryModel extends Model
{
    use HasFactory;
 
    protected $table = 'table_category';
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
         'id_kategori', 'nama'
    ];
}