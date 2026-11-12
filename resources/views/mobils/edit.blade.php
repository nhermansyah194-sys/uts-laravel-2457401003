<!DOCTYPE html>
<html>
<head><title>Edit Mobil</title></head>
<body>
<h1>Edit Mobil</h1>
<form action="{{ route('mobils.update', $mobil->id) }}" method="POST">
@csrf @method('PUT')
Merk: <input type="text" name="merk" value="{{ $mobil->merk }}"><br><br>
Plat: <input type="text" name="plat" value="{{ $mobil->plat }}"><br><br>
Warna: <input type="text" name="warna" value="{{ $mobil->warna }}"><br><br>
Harga Sewa: <input type="number" name="harga_sewa" value="{{ $mobil->harga_sewa }}"><br><br>
Status: <input type="text" name="status" value="{{ $mobil->status }}"><br><br>
<button type="submit">Update</button>
</form>
<a href="{{ route('mobils.index') }}">Kembali</a>
</body>
</html>