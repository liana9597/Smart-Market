@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> Tambah Produk</h4>

<div class="row">
  <div class="col-md-8">
    <div class="card mb-4 shadow-sm">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="bx bx-plus-circle me-2"></i>Tambah Produk Baru</h5>
        <small class="text-muted float-end">Formulir Inventaris</small>
      </div>
      <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST">
          @csrf

          <!-- Nama Produk -->
          <div class="mb-3">
            <label class="form-label" for="name">Nama Produk</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-package"></i></span>
              <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                placeholder="Contoh: Indomie Goreng, Beras Pandan Wangi"
                required
              />
            </div>
          </div>

          <!-- Kategori -->
          <div class="mb-3">
            <label class="form-label" for="category_id">Kategori</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-category"></i></span>
              <select name="category_id" id="category_id" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <!-- Harga -->
          <div class="mb-3">
            <label class="form-label" for="price">Harga (Rp)</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">Rp</span>
              <input
                type="number"
                name="price"
                id="price"
                class="form-control"
                placeholder="Contoh: 3500"
                min="0"
                required
              />
            </div>
          </div>

          <!-- Stok -->
          <div class="mb-4">
            <label class="form-label" for="stock">Stok Awal</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-archive"></i></span>
              <input
                type="number"
                name="stock"
                id="stock"
                class="form-control"
                placeholder="Contoh: 50"
                min="0"
                required
              />
              <span class="input-group-text">Pcs</span>
            </div>
          </div>

          <!-- Actions -->
          <div class="d-flex justify-content-between">
            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center">
              <i class="bx bx-arrow-back me-1"></i> Kembali
            </a>
            <button type="submit" class="btn btn-primary d-inline-flex align-items-center">
              <i class="bx bx-save me-1"></i> Simpan Produk
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection