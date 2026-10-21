@extends('layouts.main')
@section('title', 'Data Siswa')

@section('content')
<br>
<br>

<a href="{{ route('siswa.add') }}">Tambah Data</a>

<br>
<br>

<table border="1" width="70%">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
    </tr>

    @forelse ($student as $data)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->kelas }}</td>
        <td>{{ $data->jurusan }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->alamat }}</td>
    </tr>
    @empty
    <tr>
        <td colspan="7" align="center" style="color: red;">Data Siswa Belum Tersedia</td>
    </tr>
    @endforelse
</table>

@endsection