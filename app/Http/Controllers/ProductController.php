<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//harus 2 nya karena produk itu tehubung sama kategori
use App\Models\Product; //panggil model product 
use App\Models\Category; //panggil model category
use App\Exports\ProductsExport; //panggil model export
use Maatwebsite\Excel\Facades\Excel; //panggil class Excel (biar bisa make export)


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //halaman utama (daftar semua barang)
    {
        $products = Product::all(); //ambil semua data produk dari database
        return view('products.index', compact('products')); //tampilin di halaman index (halaman utama) dalam bentuk tabel
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //halaman untuk menambahkan barang
    {
        $categories = Category::all(); //ambil semua data kategori
        return view('products.create', compact('categories')); //tampilin di halaman create (halaman untuk menambahkan barang) 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //proses menyimpan data produk
    {
        $product = Product::create($request->all()); //menyimpan data produk
        return redirect()->route('products.index'); //kembali ke halaman utama
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //halaman untuk menampilkan detail produk
    {
        $product = Product::find($id); //mengambil data produk berdasarkan id
        return view('products.show', compact('product')); //menampilkan data produk
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //halaman untuk mengedit data produk
    {
        $product = Product::find($id); //mengambil data produk berdasarkan id (data lama)
        $categories = Category::all(); //mengambil semua data kategori
        return view('products.edit', compact('product', 'categories')); //menampilkan data produk
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //proses mengupdate data produk
    {
        $product = Product::find($id); //mengambil data produk berdasarkan id (data lama)
        $product->update($request->all()); //mengupdate data produk (data baru)
        return redirect()->route('products.index'); //kembali ke halaman utama
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //proses menghapus data produk
    {
        $product = Product::find($id); //mengambil data produk berdasarkan id
        $product->delete(); //menghapus data produk
        return redirect()->route('products.index'); //kembali ke halaman utama
    }

    public function exportExcel() //proses mengekspor data produk ke excel
    {
        // Memerintahkan Laravel Excel untuk mendownload file dengan template ProductsExport
        return Excel::download(new ProductsExport, 'laporan-stok-toko.xlsx'); //nama filenya harus diakhiri .xlsx
    }
}
