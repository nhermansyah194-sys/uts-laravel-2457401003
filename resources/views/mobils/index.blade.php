<!DOCTYPE html>
<html>
<head><title>Data Mobil</title></head>
<body>
<h1>Data Mobil</h1>
<a href="{{ route('mobils.create') }}">+ Tambah Mobil</a>
<table border="1" cellpadding="10">
<tr><th>Merk</th><th>Plat</th><th>Warna</th><th>Harga Sewa</th><th>Status</th><th>Aksi</th></tr>
@foreach($mobils as $mobil)
<tr>
<td>{{ $mobil->merk }}</td>
<td>{{ $mobil->plat }}</td>
<td>{{ $mobil->warna }}</td>
<td>{{ $mobil->harga_sewa }}</td>
<td>{{ $mobil->status }}</td>
<td>
<a href="{{ route('mobils.edit', $mobil->id) }}">Edit</a>
<form action="{{ route('mobils.destroy', $mobil->id) }}" method="POST" style="display:inline">
@csrf @method('DELETE')
<button type="submit">Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>