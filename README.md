# 📦 Smart Market - Aplikasi Manajemen Stok & Kategori Produk

Smart Market adalah aplikasi berbasis web yang dirancang untuk mengelola inventaris stok barang toko secara efisien, aman, dan *real-time*. Proyek ini dibangun menggunakan framework **Laravel** dengan antarmuka admin premium berbasis **Sneat Bootstrap Template**.

Aplikasi ini merupakan bagian dari portofolio pengembangan aplikasi web (*Backend Development*) untuk memenuhi kebutuhan pengelolaan data produk dan kategori toko secara dinamis.

---

## ✨ Fitur Utama

Aplikasi ini dilengkapi dengan fitur-fitur esensial manajemen retail modern:

1. **📦 Manajemen Produk (CRUD Lengkap)**
   * **Create:** Menambahkan data produk baru lengkap dengan nama, harga, stok, dan kategori.
   * **Read:** Menampilkan daftar stok produk dalam bentuk tabel interaktif.
   * **Update:** Memperbarui detail informasi produk jika terjadi perubahan data stok/harga.
   * **Delete:** Menghapus data produk yang sudah tidak tersedia secara aman.

2. **⚙️ Manajemen Kategori Barang**
   * Pengelompokan produk berdasarkan kategori yang dinamis menggunakan relasi database *Eloquent ORM* (`One-to-Many`). Admin dapat mengelola kategori secara terpisah tanpa merusak data produk.

3. **📥 Export Laporan Excel**
   * Integrasi fitur ekspor data otomatis sekali klik. Admin dapat mengunduh seluruh ringkasan laporan produk dan sisa stok secara langsung ke format file Spreadsheet Excel (`.xlsx`) siap cetak.

4. **💎 Antarmuka Modern & Responsif (Sneat Bootstrap UI)**
   * Desain visual web yang profesional, bersih, dan mewah dengan integrasi aset dari *Sneat Admin Template*. Navigasi yang mudah dipahami, komponen *card* dengan efek *shadow*, serta layout tabel yang nyaman di mata.

---

## 🛠️ Teknologi yang Digunakan

* **Backend Framework:** Laravel (PHP)
* **Database:** MySQL / MariaDB
* **Front-End Styling:** Bootstrap & Sneat Admin Template (Lokal Assets)
* **Library Ekspor Data:** Maatwebsite/Laravel-Excel

