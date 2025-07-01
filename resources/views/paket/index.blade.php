<!DOCTYPE html>
<html>
<head>
    <title>Daftar Paket Wedding</title>
</head>
<body>
    <h1>Daftar Paket Wedding</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <a href="/paket/create">+ Tambah Paket</a> |
    <a href="/booking">Booking Sekarang</a>

    <hr>

    @if(count($pakets) > 0)
        <ul>
            @foreach($pakets as $paket)
                <li>
                    <strong>{{ $paket->nama_paket }}</strong><br>
                    Deskripsi: {{ $paket->deskripsi }}<br>
                    Harga: Rp{{ number_format($paket->harga, 0, ',', '.') }}<br>
                    Tipe Adat: {{ $paket->tipe_adat }}<br>
                    Total Pemesanan: {{ $paket->total_pemesanan }}x<br><br>
                </li>
            @endforeach
        </ul>
    @else
        <p>Belum ada paket yang tersedia.</p>
    @endif
</body>
</html>
