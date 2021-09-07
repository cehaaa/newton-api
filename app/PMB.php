<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PMB extends Model
{
    //

    protected $table = 'p_m_b_s';
    protected $fillable = ['nama', 'jenisKelamin', 'alamat', 'noTelp', 'email', 'password', 'tempat', 'tanggalLahir', 'asalSekolah', 'kota', 'jurusan', 'ijazah', 'rapor', 'suratPernyataan'];
    protected $primaryKey = 'id';
}
