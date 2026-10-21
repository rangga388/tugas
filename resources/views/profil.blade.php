@extends('layouts.main')

@section('title', 'Profil Saya')

@section('content')
<h2>Data Profil</h2>

<!-- Tabel Profil Sederhana Berwarna -->
<table width="100%" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">

    <!-- Bagian Foto & Nama Header -->
    <tr bgcolor="#4a90e2">
        <td colspan="3" align="center" style="color: white;">
            <!-- Menggunakan gambar placeholder sederhana -->

            <font size="5"><b>Rangga la</b></font>
        </td>
    </tr>

    <!-- Data 1: Kelas -->
    <tr bgcolor="#f9f9f9">
        <td width="25%" bgcolor="#e6f2ff"><b>Kelas</b></td>
        <td width="5%" align="center">:</td>
        <td>XI RPL 1</td>
    </tr>

    <!-- Data 2: Jurusan -->
    <tr bgcolor="#ffffff">
        <td bgcolor="#e6f2ff"><b>Jurusan</b></td>
        <td align="center">:</td>
        <td>Rekayasa Perangkat Lunak</td>
    </tr>

    <!-- Data 3: Email -->
    <tr bgcolor="#f9f9f9">
        <td bgcolor="#e6f2ff"><b>Email</b></td>
        <td align="center">:</td>
        <td>ranggala@example.com</td>
    </tr>

    <!-- Data 4: Alamat -->
    <tr bgcolor="#ffffff">
        <td bgcolor="#e6f2ff"><b>Alamat</b></td>
        <td align="center">:</td>
        <td>Jl. Merdeka No. 45, Bandung</td>
    </tr>

    <!-- Footer Tabel / Status -->
    <tr bgcolor="#d4edda">
        <td colspan="3" align="center" style="color: #155724;">
            <b>Status Akun: Aktif</b>
        </td>
    </tr>

</table>
@endsection