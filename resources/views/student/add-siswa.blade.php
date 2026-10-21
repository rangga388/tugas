@extends('layouts.main')
@section('title', 'Tambah Data Siswa')
@section('content')

<h1>Tambah Data</h1>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama" placeholder="Isikan nama anda"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                : <select name="kelas" id="kelas">
                    <option value="X">Kelas X</option>
                    <option value="XI">Kelas XI</option>
                    <option value="XII">Kelas XII</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <input type="radio" name="jurusan" value="RPL">Rekayasa Perangkat Lunak <br>
                <input type="radio" name="jurusan" value="TKJ">Teknik Komputer dan Jaringan <br>
                <input type="radio" name="jurusan" value="TKR">Teknik Kendaraan Ringan <br>
                <input type="radio" name="jurusan" value="AKL">Akuntansi dan Keuangan Lembaga <br>
                <input type="radio" name="jurusan" value="TB">Tata Busana

            </td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td>: <input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                : <select name="jenis_kelamin">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                : <textarea name="alamat" cols="30" rows="6" placeholder="Isikan alamat anda"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Simpan</button>
            </td>
        </tr>
    </table>
</form>

@endsection