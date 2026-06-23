@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kategori /</span> Daftar Kategori</h4>

<div class="card shadow-sm">
  <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
    <h5 class="mb-0"><i class="bx bx-category me-2"></i>Daftar Kategori Smart Market</h5>
    <div class="d-flex gap-2">
      <a href="{{ route('products.index') }}" class="btn btn-outline-secondary btn-sm d-inline-flex align-items-center">
        <i class="bx bx-arrow-back me-1"></i> Daftar Produk
      </a>
      <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm d-inline-flex align-items-center">
        <i class="bx bx-plus me-1"></i> Tambah Kategori
      </a>
    </div>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th style="width: 10%">ID</th>
          <th>Nama Kategori</th>
          <th class="text-center" style="width: 20%">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @forelse($categories as $category)
        <tr>
          <td><strong>#{{ $category->id }}</strong></td>
          <td><span class="fw-semibold">{{ $category->name }}</span></td>
          <td class="text-center">
            <div class="d-flex justify-content-center gap-2">
              <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-outline-info d-inline-flex align-items-center">
                <i class="bx bx-edit-alt me-1"></i> Edit
              </a>
              <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus kategori ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger d-inline-flex align-items-center">
                  <i class="bx bx-trash me-1"></i> Hapus
                </button>
              </form>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="3" class="text-center text-muted py-4">Belum ada data kategori.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection