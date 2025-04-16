<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form method="POST" action="/barang">
        @csrf
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="number" name="qty" placeholder="Qty" required>
        <input type="number" step="0.01" name="harga" placeholder="Harga" required>
        <button type="submit">Simpan</button>
    </form>

    <h2>Daftar Barang</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $barang)
        <tr>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->qty }}</td>
            <td>{{ $barang->harga }}</td>
            <td>
                <form method="POST" action="/barang/{{ $barang->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
