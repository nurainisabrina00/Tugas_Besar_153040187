<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;
use Illuminate\Database\Migration\Migration;
use App\Models\ImageModel;



class ProductController extends Controller {

    protected $data = [];

    public function __construct() {
        
    }

    public function index() {
        
         /// mengambil data terakhir dan pagination 5 list
        $product = ProductModel::latest()->paginate(10);

        $gambar = ImageModel::all();

        // $data['data_product'] = DB::table('table_product')
        //     ->select('*')
        //     ->get();
         
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('backend/product',compact('product', 'gambar'));
//            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        $data['data_kategori'] = DB::table('table_category')
        ->select('*')
        ->get();

        /// menampilkan halaman create
        return view('backend.create_product', $data);
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required'
        ]);


        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        $data_product = ProductModel::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori
        ]);

        //upload image
        $requestGambar = $request->file('gambar');
        foreach($requestGambar as $row) {
            $filename = $row->hashName();
            $row->storeAs('public/upload', $filename);

             ImageModel::create([
                'nama_file' => $filename,
                'deskripsi' => '',
                'id_product' => $data_product->id_product
            ]);
        }

        // $image1 = $request->file('gambar1');
        // $filename1 = $image1->hashName();
        // $image1->storeAs('public/upload', $filename1);

        //  $image2 = $request->file('gambar2');
        // $filename2 = $image2->hashName();
        // $image2->storeAs('public/upload', $filename2);

        //  $image3 = $request->file('gambar3');
        // $filename3 = $image3->hashName();
        // $image3->storeAs('public/upload', $filename3);

        //  $image4 = $request->file('gambar4');
        // $filename4 = $image4->hashName();
        // $image4->storeAs('public/upload', $filename4);

        if($data_product) {
            //  ImageModel::create([
            //     'nama_file' => $filename1,
            //     'deskripsi' => '',
            //     'id_product' => $data_product->id_product
            // ]);
            //  ImageModel::create([
            //     'nama_file' => $filename2,
            //     'deskripsi' => '',
            //     'id_product' => $data_product->id_product
            // ]);
            //  ImageModel::create([
            //     'nama_file' => $filename3,
            //     'deskripsi' => '',
            //     'id_product' => $data_product->id_product
            // ]);
            //  ImageModel::create([
            //     'nama_file' => $filename4,
            //     'deskripsi' => '',
            //     'id_product' => $data_product->id_product
            // ]);
         }
        /// redirect jika sukses menyimpan data
        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    
    }
  
    public function show(ProductModel $product)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('backend.edit_product',compact('product'));
    }
  
    public function edit(ProductModel $product)
    {
        $data['data_kategori'] = DB::table('table_category')
        ->select('*')
        ->get();
        $data['product'] = $product;
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('backend.edit_product',$data);
    }
  
    public function update(Request $request, ProductModel $product)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $product->update($request->all());
         
        /// setelah berhasil mengubah data
        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
    }
  
    public function destroy(ProductModel $product)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $product->delete();
  
        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }
}