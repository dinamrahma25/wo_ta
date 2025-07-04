<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
    <h1>Edit Customer</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/customer/update/{{ $customer->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $customer->nama }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $customer->email }}"><br><br>

        <label>No HP:</label><br>
        <input type="text" name="no_hp" value="{{ $customer->no_hp }}"><br><br>

        <label>Paket:</label><br>
        <select name="paket_id">
            @foreach($pakets as $paket)
                <option value="{{ $paket->id }}" {{ $customer->paket_id == $paket->id ? 'selected' : '' }}>
                    {{ $paket->nama_paket }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/customer">← Kembali ke Data Customer</a>
</body>
</html>
