<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    public $timestamps = false;
    protected $primaryKey = 'nim';

    /**
     * The attributes that are mass assignable.
     * @var array
     */

    protected $fillable = [
        'nim',
        'nama',
        'kelas',
        'jurusan',
        'no_handphone',
        'email',
        'tanggal_lahir'
    ];
}
