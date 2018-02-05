<?php

namespace App;
use App\Mata_Kuliah;
use Illuminate\Database\Eloquent\Model;

class Mata_Kuliah extends Model
{
    protected $table = 'mata__kuliahs';
    protected $fillable = array('nama_matkul','kkm');

    public function mahasiswa() {
		return $this->belongsToMany('App\Mahasiswa', 'matkul_mahasiswa', 'mapel_id', 'siswa_id');
	}
}
