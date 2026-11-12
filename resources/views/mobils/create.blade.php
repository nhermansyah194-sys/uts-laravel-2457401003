<!DOCTYPE html>
<html>
<head><title>Tambah Mobil</title></head>
<body>
<h1>Tambah Mobil</h1>
<form action="{{ route('mobils.store') }}" method="POST">
@csrf
Merk: <input type="text" name="merk"><br><br>
Plat: <input type="text" name="plat"><br><br>
Warna: <input type="text" name="warna"><br><br>
Harga Sewa: <input type="number" name="harga_sewa"><br><br>
Status: <input type="text" name="status" value="tersedia"><br><br>
<button type="submit">Simpan</button>
</form>
<a href="{{ route('mobils.index') }}">Kembali</a>
</body>
</html>