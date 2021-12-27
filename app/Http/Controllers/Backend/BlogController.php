<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BlogModel;
use Illuminate\Database\Migration\Migration;
use App\Models\ImageBlogModel;

class BlogController extends Controller {

    protected $data = [];

    public function __construct() {
        
    }

    public function index() {

        $data_blog = BlogModel::latest()->paginate(10);
        $gambar = ImageBlogModel::all();

        return view('backend/blog', compact('data_blog', 'gambar'));
    }

    public function create() {
        $data['data_blog'] = DB::table('table_blog')
                ->select('*')
                ->get();

        /// menampilkan halaman create
        return view('backend.create_blog', $data);
    }

    public function store(Request $request) {

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'tahun_penerbit' => 'required'
        ]);

        $data_blog = BlogModel::create([
                    'judul' => $request->judul,
                    'isi' => $request->isi,
                    'penulis' => $request->penulis,
                    'tahun_penerbit' => $request->tahun_penerbit
        ]);
        
        //upload image
        $requestGambar = $request->file('gambar');
        foreach ($requestGambar as $row) {
            $filename = $row->hashName();
            $row->storeAs('public/upload', $filename);

            ImageBlogModel::create([
                'nama_file' => $filename,
                'deskripsi' => '',
                'id_blog' => $data_blog->id_blog
            ]);
        }

        if ($data_blog) {
            return redirect()->route('blog.index')
                            ->with('success', 'blog created successfully.');
        }
    }

    public function show(BlogModel $blog) {
        return view('backend.edit_blog', compact('data_blog'));
    }

    public function edit(BlogModel $blog) {
        $detail_blog = DB::table('table_blog')
                ->select('*')
                ->where('id_blog', '=', $blog->id_blog)
                ->limit(1)
                ->get()[0];
       return view('backend.edit_blog', compact('detail_blog'));
    }

    public function update(Request $request, BlogModel $blog) {

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'tahun_penerbit' => 'required'
        ]);

        $blog->update($request->all());
        return redirect()->route('blog.index')
                        ->with('success', 'Product updated successfully');
    }

    public function destroy(BlogModel $blog) {
    /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $blog->delete();

        return redirect()->route('blog.index')
                        ->with('success', 'blog deleted successfully');
    }
    
    public function save_data(Request $request){

    }
}
