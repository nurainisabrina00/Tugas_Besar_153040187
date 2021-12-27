<?php

namespace App\Http\Controllers\Backend;

use App\Models\ProductModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migration\Migration;
use App\Models\CategoryModel;

class CategoryController extends Controller {

    protected $data = [];

    public function __construct() {
        
    }

    public function index() {

        $data_category = CategoryModel::all();

        return view('backend/category', compact('data_category'));
    }

    public function create() {
        $data_category = DB::table('table_category')
                ->select('*')
                ->get();

        /// menampilkan halaman create
        return view('backend/create_category', compact('data_category'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
        ]);

        $data_category = CategoryModel::create([
                    'nama' => $request->nama,
        ]);
        if ($data_category) {
            return redirect()->route('category.index')
                            ->with('success', 'category created successfully.');
        }
    }

    public function show(CategoryModel $data_category) {

        return view('backend.edit_category', compact('data_category'));
    }

    public function edit(CategoryModel $category) {
        $data['data_kategori'] = DB::table('table_category')
                ->select('*')
                ->get();
        $data['category'] = $category;
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('backend.edit_category', $data);
    }

    public function update(Request $request, CategoryModel $category) {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
        ]);

        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $product->update($request->all());

        /// setelah berhasil mengubah data
        return redirect()->route('product.index')
                        ->with('success', 'Product updated successfully');
    }

    public function destroy(CategoryModel $category) {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $category->delete();

        return redirect()->route('category.index')
                        ->with('success', 'Product deleted successfully');
    }

}
