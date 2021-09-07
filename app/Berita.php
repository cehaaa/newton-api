<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Carbon\Carbon;

class Berita extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = ['photo','judul_berita','sub_judul','isi_berita'];
    protected $table = 'beritas';

    protected $appends = ['new'];

    public function getNewAttribute() {
        return $this->created_at->isToday();
    }
}
