<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = array('nama','nis','guru_id','kelas_id');

    public function wali() {
		return $this->hasOne('App\Wali', 'siswa_id');
	}
	public function dosen() {
		return $this->belongsTo('App\Dosen', 'guru_id');
	}
	public function jurusan() {
		return $this->belongsTo('App\Jurusan', 'kelas_id');
	}
	public function mata_kuliah() {
		return $this->belongsToMany('App\Mata_Kuliah', 'matkul_mahasiswa', 'siswa_id', 'mapel_id');
	}


}
