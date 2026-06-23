@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kategori /</span> Tambah Kategori</h4>

<div class="row">
  <div class="col-md-6">
    <div class="card mb-4 shadow-sm">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="bx bx-plus-circle me-2"></i>Tambah Kategori Baru</h5>
        <small class="text-muted float-end">Formulir Kategori</small>
      </div>
      <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST">
          @csrf

          <div class="mb-4">
            <label class="form-label" for="name">Nama Kategori</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-tag-alt"></i></span>
              <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                placeholder="Contoh: Makanan, Minuman, Sembako"
                aria-label="Nama Kategori"
                required
              />
            </div>
            <div class="form-text">Masukkan nama kategori produk yang sesuai.</div>
          </div>

          <div class="d-flex justify-content-between">
            <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center">
              <i class="bx bx-arrow-back me-1"></i> Kembali
            </a>
            <button type="submit" class="btn btn-primary d-inline-flex align-items-center">
              <i class="bx bx-save me-1"></i> Simpan Kategori
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection