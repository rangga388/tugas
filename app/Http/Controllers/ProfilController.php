<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $student = Student::all();

        // CRUD (CREATE, READ, UPDATE, DELETE)
        return view('siswa', compact('student'));
    }

    public function add()
    {
        return view('student.add-siswa');
    }

    public function store(Request $request)
    {

        Student::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
        ]);

    }

}
