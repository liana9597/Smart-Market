<?php

namespace App\Exports; //folder khusus untuk menyimpan file excel

use App\Models\Product; //panggil model product
use Maatwebsite\Excel\Concerns\FromQuery; //membuat query (pilar utama)
use Maatwebsite\Excel\Concerns\WithHeadings; //membuat judul kolom (header)
use Maatwebsite\Excel\Concerns\WithMapping; //memasangkan isi database agar pas di bawah judul kolom (isi tabelnya)

class ProductsExport implements FromQuery, WithHeadings, WithMapping //implements biar bisa make all of them (3 fitur)
{
    /**
     * 1. PILAR QUERY: Mengambil data produk dari database beserta kategori-nya
     */
    public function query() //mengambil data produk dari database beserta kategori-nya
    {
        // Kita pakai with('category') biar Laravel otomatis narik data nama kategorinya juga
        return Product::query()->with('category'); //product query with category (biar bisa narik data kategori)
    }

    /**
     * 2. PILAR HEADINGS: Membuat baris judul paling atas di Excel
     */
    public function headings(): array //membuat baris judul paling atas di Excel (header)
    {
        return [
            'ID Produk',
            'Nama Produk',
            'Kategori',
            'Harga',
            'Stok Barang',
        ];
    }

    /**
     * 3. PILAR MAP: Memasangkan isi database agar pas di bawah judul kolom
     */
    public function map($product): array //memasangkan isi database agar pas di bawah judul kolom (isi tabelnya)
    {
        return [
            $product->id,
            $product->name,
            $product->category->name ?? '-', // Mengambil nama kategori dari relasi tabel induk!
            $product->price,
            $product->stock,
        ];
    }
}