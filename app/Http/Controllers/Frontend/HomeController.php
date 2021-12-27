<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ProductModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageModel;
use App\Models\CategoryModel;
use App\Models\BlogModel;
use App\Models\ImageBlogModel;

class HomeController extends Controller {

    protected $data = [];

    public function __construct() {
        
    }

    public function home(Request $request) {
        return view('home');
    }

    public function login(Request $request) {
        return view('login');
    }

    public function contact(Request $request) {
        return view('contact');
    }

    public function product(Request $request) {
//        $product = ProductModel::latest()->paginate(5);  
        $product = ProductModel::join('table_category', 'table_product.id_kategori', '=', 'table_category.id_kategori')
                ->get([
            'table_product.*',
            'table_product.nama AS nama_product',
            'table_category.*',
            'table_category.nama AS nama_kategori'
        ]);
        $gambar = ImageModel::all();
        $category = CategoryModel:: all();
        return view('product', compact('product', 'gambar', 'category',));
    }

    public function compare(Request $request) {
        return view('compare');
    }

    public function about(Request $request) {
        return view('about');
    }

    public function single_product(Request $request, $id_product) {

        $detail_product = ProductModel::join('table_category', 'table_product.id_kategori', '=', 'table_category.id_kategori')->where('id_product', $id_product)->first();
        $detail_gambar = ImageModel::where('id_product', $id_product)->get();
        $product = ProductModel::join('table_category', 'table_product.id_kategori', '=', 'table_category.id_kategori')
                ->get([
            'table_product.*',
            'table_product.nama AS nama_product',
            'table_category.*',
            'table_category.nama AS nama_kategori'
        ]);
        $gambar = ImageModel::all();
        return view('detail_product/single-product', compact('detail_product', 'detail_gambar', 'product', 'gambar'));
    }


    public function blog_right_sidebar(Request $request) {

        $data_image_blog = BlogModel::join('table_gambar_blog', 'table_gambar_blog.id_blog', '=', 'table_blog.id_blog')
                ->get([
            'table_blog.*',
            'table_gambar_blog.*',
        ]);
        $gambar = ImageBlogModel::all();
        $data_blog = BlogModel::select("*")
                        ->limit(10)
                        ->get();
        $data_recent_blog = BlogModel::select("*")
                        ->orderBy("created_at","desc")
                        ->limit(5)
                        ->get();
        return view('blog-right-sidebar', compact('data_image_blog', 'gambar','data_blog','data_recent_blog'));
    }

    public function blog_details_gallery(Request $request) {

        $data_blog = BlogModel::join('table_blog', 'table_blog.id_blog', '=', 'table_gambar_blog.id_gambar_blog')
                ->get([
            'table_blog.*',
            'table_gambar_blog.*',
        ]);
        $gambar = ImageBlogModel::all();
        $data_blog_model = BlogModel:: all();
        return view('blog', compact('data_blog', 'gambar','data_blog_model '));
    }

    public function my_account(Request $request) {
        return view('my-account');
    }

}
