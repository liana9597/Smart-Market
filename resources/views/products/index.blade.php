@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Produk /</span> Daftar Produk</h4>

<div class="card shadow-sm">
  <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
    <h5 class="mb-0"><i class="bx bx-package me-2"></i>Daftar Produk Smart Market</h5>
    <div class="d-flex flex-wrap gap-2">
      <a href="{{ route('categories.index') }}" class="btn btn-outline-warning btn-sm d-inline-flex align-items-center text-dark fw-semibold">
        <i class="bx bx-category me-1"></i> Daftar Kategori
      </a>
      <a href="{{ route('products.export') }}" class="btn btn-warning btn-sm d-inline-flex align-items-center text-dark fw-semibold">
        <i class="bx bx-file me-1"></i> Export Excel
      </a>
      <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm d-inline-flex align-items-center">
        <i class="bx bx-plus me-1"></i> Tambah Produk
      </a>
    </div>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th style="width: 10%">ID</th>
          <th>Nama Produk</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Stok</th>
          <th class="text-center" style="width: 20%">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @forelse($products as $product)
        <tr>
          <td><strong>#{{ $product->id }}</strong></td>
          <td><span class="fw-semibold text-primary">{{ $product->name }}</span></td>
          <td>
            @if($product->category)
              <span class="badge bg-label-info">{{ $product->category->name }}</span>
            @else
              <span class="badge bg-label-secondary">-</span>
            @endif
          </td>
          <td><strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong></td>
          <td>
            @if($product->stock <= 10)
              <span class="badge bg-label-danger">{{ $product->stock }} Pcs (Tipis)</span>
            @elseif($product->stock <= 30)
              <span class="badge bg-label-warning">{{ $product->stock }} Pcs</span>
            @else
              <span class="badge bg-label-success">{{ $product->stock }} Pcs</span>
            @endif
          </td>
          <td class="text-center">
            <div class="d-flex justify-content-center gap-2">
              <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-outline-info d-inline-flex align-items-center">
                <i class="bx bx-edit-alt me-1"></i> Edit
              </a>
              <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau hapus produk ini?')">
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
          <td colspan="6" class="text-center text-muted py-4">Belum ada data produk.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection