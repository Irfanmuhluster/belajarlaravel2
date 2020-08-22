<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    
    protected $table = 'pegawai';
    
    protected $fillable = [
        'nama_pegawai', 'jabatan', 'alamat', 'tanggallahir'
    ];

    protected $dates = ['tanggallahir'];
}
