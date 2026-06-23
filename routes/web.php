<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect()->route('products.index'); // Otomatis diarahkan ke jalur yang benar
});

// Jalur khusus untuk memicu fungsi download excel
// sintaks ini harus di atas karena product/ kalo di bawah resource, maka /export-excel bakalan dianggap sebagai ID
Route::get('products/export-excel', [ProductController::class, 'exportExcel'])->name('products.export'); //biar bisa make resource (create, update, delete)

//sintkas ini harus selalu di bawah jika ada tambahan routing di atasnya yang ada product/kategori dan huruf kecil
Route::resource('products', ProductController::class); //biar bisa make resource (create, update, delete)
Route::resource('categories', CategoryController::class); //biar bisa make resource (create, update, delete)

