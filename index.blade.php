<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tampilkan daftar produk -->
    <ul>
        @foreach ($produks as $produk)
            <li>{{ $produk->nama }} - Harga: Rp {{ number_format($produk->harga) }}</li>
        @endforeach
    </ul>

    <!-- Form untuk menambahkan produk baru -->
    <form action="/produk" method="post">
        @csrf
        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga"><br>
        <button type="submit">Tambah Produk</button>
    </form>
</body>
</html>
