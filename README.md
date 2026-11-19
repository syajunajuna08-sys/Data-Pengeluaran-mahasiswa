# Sistem Informasi Keuangan Mahasiswa

Aplikasi web sederhana untuk membantu mahasiswa mencatat dan mengelola pemasukan serta pengeluaran keuangan secara terstruktur. Aplikasi ini dikembangkan menggunakan framework CodeIgniter 4, Bootstrap 5, PHP, dan database MySQL.

## 1. Deskripsi Aplikasi

Sistem Informasi Keuangan Mahasiswa merupakan aplikasi berbasis web yang digunakan untuk melakukan pencatatan transaksi keuangan mahasiswa, baik pemasukan maupun pengeluaran.

Aplikasi ini menyediakan halaman Dashboard untuk menampilkan ringkasan kondisi keuangan secara keseluruhan. Data pemasukan dan pengeluaran disimpan dalam database MySQL sehingga dapat dikelola dan ditampilkan kembali melalui aplikasi.

## 2. Fitur Aplikasi

### A. Dashboard

Dashboard merupakan halaman utama yang menampilkan ringkasan informasi keuangan mahasiswa, meliputi:

- **Total Pemasukan:** Menampilkan jumlah keseluruhan uang yang diterima.
- **Total Pengeluaran:** Menampilkan jumlah keseluruhan uang yang dikeluarkan.
- **Sisa Saldo:** Menampilkan selisih antara total pemasukan dan total pengeluaran.
- **Jumlah Transaksi:** Menampilkan jumlah seluruh transaksi pemasukan dan pengeluaran.

### B. Data Pengeluaran

Digunakan untuk mengelola catatan pengeluaran mahasiswa dengan fitur:

- Menampilkan daftar data pengeluaran.
- Menambahkan data pengeluaran.
- Mengubah data pengeluaran.
- Menghapus data pengeluaran.
- Menampilkan informasi tanggal, kategori, keterangan, dan nominal pengeluaran.

### C. Data Pemasukan

Digunakan untuk mengelola catatan pemasukan mahasiswa dengan fitur:

- Menampilkan daftar data pemasukan.
- Menambahkan data pemasukan.
- Mengubah data pemasukan.
- Menghapus data pemasukan.
- Menampilkan informasi tanggal, sumber pemasukan, keterangan, dan nominal pemasukan.

### D. Navigasi Sidebar

Aplikasi menggunakan sidebar di sebelah kiri sebagai menu navigasi utama yang terdiri dari:

- Dashboard
- Data Pengeluaran
- Data Pemasukan

Sidebar memudahkan pengguna berpindah dari satu halaman ke halaman lainnya.

## 3. Teknologi yang Digunakan

Teknologi yang digunakan dalam pengembangan aplikasi ini adalah:

| Teknologi | Keterangan |
|---|---|
| PHP | Bahasa pemrograman backend |
| CodeIgniter 4 | Framework pengembangan aplikasi |
| MySQL | Sistem manajemen database |
| Bootstrap 5 | Framework CSS untuk tampilan |
| HTML | Struktur halaman web |
| CSS | Mengatur desain dan tampilan aplikasi |
| XAMPP | Server lokal untuk menjalankan aplikasi |
| Visual Studio Code | Editor kode program |

## 4. Struktur Folder

Struktur folder utama aplikasi:

```text
pengeluaran-mahasiswa/
│
├── app/
│   ├── Config/
│   │   └── Routes.php
│   │
│   ├── Controllers/
│   │   ├── Dashboard.php
│   │   ├── Pengeluaran.php
│   │   └── Pemasukan.php
│   │
│   ├── Models/
│   │   ├── PengeluaranModel.php
│   │   └── PemasukanModel.php
│   │
│   └── Views/
│       ├── dashboard/
│       │   └── index.php
│       │
│       ├── pengeluaran/
│       │   ├── index.php
│       │   ├── form.php
│       │   └── layout.php
│       │
│       └── pemasukan/
│           ├── index.php
│           └── form.php
│
├── public/
├── system/
├── tests/
├── writable/
├── .env
├── composer.json
├── spark
└── README.md
```

## 5. Instalasi dan Konfigurasi

Berikut langkah-langkah untuk menjalankan aplikasi pada komputer lokal.

### A. Persiapan

Pastikan perangkat sudah memiliki:

- XAMPP.
- PHP versi 8.2 atau lebih baru.
- Composer.
- Visual Studio Code.
- Browser.

### B. Menjalankan XAMPP

1. Buka XAMPP Control Panel.
2. Jalankan Apache jika diperlukan.
3. Jalankan MySQL untuk mengaktifkan database.

### C. Konfigurasi Database

1. Buka phpMyAdmin melalui `http://localhost/phpmyadmin`.
2. Buat database dengan nama:

   `pengeluaran_mahasiswa`

3. Pastikan database memiliki tabel `pengeluaran` dan `pemasukan`.
4. Sesuaikan konfigurasi database pada file `.env`.

Contoh konfigurasi:

```ini
database.default.hostname = localhost
database.default.database = pengeluaran_mahasiswa
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### D. Konfigurasi Environment

Pastikan file `.env` sudah tersedia pada folder utama proyek.

Atur konfigurasi berikut:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'
```

Sesuaikan pengaturan database jika menggunakan username atau password yang berbeda.

### E. Menjalankan Aplikasi

Buka Command Prompt (CMD), kemudian masuk ke folder proyek:

```cmd
cd C:\xampp\htdocs\pengeluaran-mahasiswa
```

Atur PHP yang digunakan melalui CMD:

```cmd
set "PATH=C:\laragon\bin\php\php-8.3.30-Win32-vs16-x64;%PATH%"
```

Jalankan server CodeIgniter 4:

```cmd
php spark serve
```

Jika server berhasil dijalankan, buka browser dan akses:

```text
http://localhost:8080
```

## 6. Alur Penggunaan Aplikasi

1. Pengguna membuka aplikasi melalui browser.
2. Sistem menampilkan halaman Dashboard.
3. Pengguna dapat melihat ringkasan pemasukan, pengeluaran, sisa saldo, dan jumlah transaksi.
4. Pengguna memilih menu Data Pemasukan untuk menambahkan atau mengelola pemasukan.
5. Pengguna memilih menu Data Pengeluaran untuk menambahkan atau mengelola pengeluaran.
6. Sistem menyimpan perubahan data ke dalam database MySQL.
7. Dashboard menampilkan ringkasan keuangan berdasarkan data transaksi yang tersimpan.

## 7. Perhitungan Dashboard

Perhitungan ringkasan keuangan pada Dashboard menggunakan rumus berikut:

**Total Pemasukan**

Jumlah seluruh nominal transaksi pemasukan.

**Total Pengeluaran**

Jumlah seluruh nominal transaksi pengeluaran.

**Sisa Saldo**

```text
Sisa Saldo = Total Pemasukan - Total Pengeluaran
```

**Jumlah Transaksi**

```text
Jumlah Transaksi = Jumlah Pemasukan + Jumlah Pengeluaran
```

## 8. Penerapan MVC CodeIgniter 4

