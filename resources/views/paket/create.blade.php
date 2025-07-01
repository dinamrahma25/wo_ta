<!DOCTYPE html>
<html>
<head>
    <title>Tambah Paket</title>
</head>
<body>
    <h1>Form Tambah Paket Wedding</h1>

    <form action="/paket/tambah" method="POST">
        @csrf

        <label>Nama Paket:</label><br>
        <input type="text" name="nama_paket"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"></textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga"><br><br>

        <label>Tipe Adat:</label><br>
        <input type="text" name="tipe_adat"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="/">← Kembali ke Halaman Utama</a>
</body>
</html>
