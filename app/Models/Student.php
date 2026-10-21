<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nama', 'kelas', 'jurusan', 'email', 'jenis_kelamin', 'alamat'])]
class Student extends Model
{
    //
}
