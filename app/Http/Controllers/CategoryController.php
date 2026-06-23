<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; //ini sendiri karena tabel nya berdiri sendiri (tabel utama)

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //halaman utama (daftar semua kategori)
    {
        $categories = Category::all(); //ambil semua data kategori dari database
        return view('categories.index', compact('categories')); //tampilin di halaman index (halaman utama) dalam bentuk tabel
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //halaman untuk menambahkan kategori
    {
        return view('categories.create'); //tampilin di halaman create (halaman untuk menambahkan kategori)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //proses menyimpan data kategori
    {
        $category = Category::create($request->all()); //menyimpan data kategori
        return redirect()->route('categories.index'); //kembali ke halaman utama
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //halaman untuk menampilkan detail kategori
    {
        $category = Category::find($id); //mengambil data kategori berdasarkan id
        return view('categories.show', compact('category')); //menampilkan data kategori
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) //halaman untuk mengedit data kategori
    {
        $category = Category::find($id); //mengambil data kategori berdasarkan id
        return view('categories.edit', compact('category')); //menampilkan data kategori
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //proses mengupdate data kategori
    {
        $category = Category::find($id); //mengambil data kategori berdasarkan id
        $category->update($request->all()); //mengupdate data kategori
        return redirect()->route('categories.index'); //kembali ke halaman utama
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //proses menghapus data kategori
    {
        $category = Category::find($id); //mengambil data kategori berdasarkan id
        $category->delete(); //menghapus data kategori
        return redirect()->route('categories.index'); //kembali ke halaman utama
    }
}
