<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
</head>
<body>

    <h1>Daftar Produk Toko Kelontong</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Gambar</th>
                <th>SKU</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>

        <tbody>
             @foreach($produk as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                <img src="{{ $item['gambar'] }}" width="100">
            </td>
            <td>{{ $item['nama'] }}</td>
            <td>{{ $item['sku'] }}</td>
            <td>Rp {{ $item['harga'] }}</td>
            <td>{{ $item['stok'] }}</td>
        </tr>
    @endforeach
        </tbody>
    </table>
</body>
</html>