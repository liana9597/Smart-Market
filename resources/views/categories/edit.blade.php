@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kategori /</span> Edit Kategori</h4>

<div class="row">
  <div class="col-md-6">
    <div class="card mb-4 shadow-sm">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="bx bx-edit-alt me-2"></i>Edit Kategori: {{ $category->name }}</h5>
        <small class="text-muted float-end">Formulir Kategori</small>
      </div>
      <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-4">
            <label class="form-label" for="name">Nama Kategori</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-tag-alt"></i></span>
              <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                value="{{ $category->name }}"
                aria-label="Nama Kategori"
                required
              />
            </div>
            <div class="form-text">Masukkan nama kategori produk yang sesuai.</div>
          </div>

          <div class="d-flex justify-content-between">
            <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center">
              <i class="bx bx-x me-1"></i> Batal
            </a>
            <button type="submit" class="btn btn-warning text-dark fw-bold d-inline-flex align-items-center">
              <i class="bx bx-save me-1"></i> Simpan Perubahan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection