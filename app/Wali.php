<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    protected $table = 'walis';
    protected $fillable = array('nama','alamat','siswa_id');

    public function mahasiswa() {
		return $this->belongsTo('App\Mahasiswa', 'siswa_id');
	}

}
