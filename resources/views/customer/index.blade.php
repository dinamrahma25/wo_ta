<!DOCTYPE html>
<html>
<head>
    <title>Data Customer</title>
</head>
<body>
    <h1>Daftar Customer</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Paket</th>
                <th>Aksi</th> <!-- ➕ Kolom baru -->
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->nama }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->no_hp }}</td>
                <td>{{ $customer->paket ? $customer->paket->nama_paket : '-' }}</td>
                <td>
                    <a href="/customer/edit/{{ $customer->id }}">Edit</a> |
                    <form action="/customer/delete/{{ $customer->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin mau hapus?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="/customer/tambah">+ Tambah Customer</a><br><br>
    <a href="/">← Kembali ke Halaman Utama</a>
</body>
</html>
