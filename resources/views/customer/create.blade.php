<!DOCTYPE html>
<html>
<head>
    <title>Tambah Customer</title>
</head>
<body>
    <h1>Form Tambah Customer</h1>

    <form action="/customer/store" method="POST">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp"><br><br>

        <label>Pilih Paket:</label><br>
        <select name="paket_id">
            <option value="">-- Pilih Paket --</option>
            @foreach ($pakets as $paket)
                <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="/">← Kembali ke Halaman Utama</a>
</body>
</html>