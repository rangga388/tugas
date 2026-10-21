<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>

    <table width="30%">
        <tr>
            <td>
                <a href="{{ route('home') }}">Home</a>
            </td>
            <td>
                <a href="{{ route('profile') }}">Profile</a>
            </td>
            <td>
                <a href="{{ route('about') }}">About</a>
            </td>
            <td>
                <a href="{{ route('siswa') }}">Daftar Siswa</a>
        </tr>
    </table>

    {{-- content --}}
    @yield('content')

</body>

</html>