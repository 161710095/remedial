<?php

use Illuminate\Database\Seeder;
use App\Wali;
use App\Mahasiswa;
use App\Dosen;
use App\Jurusan;
use App\Mata_Kuliah;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->delete();
		DB::table('walis')->delete();
		DB::table('dosens')->delete();
		DB::table('jurusans')->delete();
		DB::table('mata__kuliahs')->delete();
		DB::table('matkul_mahasiswa')->delete();


		

		$dosen = App\Dosen::create(array(
			'nama' => 'Iik Hikmat',
			'nipd' => '1234567800',
		    'alamat' => 'Jl. Tol',
			'mata_kuliah' => 'Seni'));

		$this->command->info('Data guru telah diisi!');

		$jurusan = App\Jurusan::create(array(
			'nama_jurusan' => 'Teknik Komputer Jaringan'));
		$jurusan1 = App\Jurusan::create(array(
			'nama_jurusan' => 'Rekayasa Perangkat Lunak'));

		$this->command->info('Data Jurusan telah diisi!');

		$seni1 = Mata_Kuliah::create(array('nama_matkul' => 'Seni Musik','kkm' => '85'));
		$seni2 = Mata_Kuliah::create(array('nama_matkul' => 'Seni Gambar','kkm' => '80'));


		$a = App\Mahasiswa::create(array(
			'nama' => 'Ariz Muhammad',
			'nis'  => '1015015001',
		  	'guru_id' => $dosen->id,
		  	'kelas_id' => $jurusan->id));
		$b = App\Mahasiswa::create(array(
			'nama' => 'Hiro',
			'nis'  => '1015015002',
			'guru_id' => $dosen->id,
			'kelas_id' => $jurusan1->id));
		
		$a->mata_kuliah()->attach($seni1->id);
		$b->mata_kuliah()->attach($seni2->id);
		
		$this->command->info('Mahasiswa beserta Mata Kuliah telah diisi!');
		$this->command->info('Mahasiswa telah diisi!');

		

		App\Wali::create(array(
			'nama'  => 'lagos',
			'alamat' => 'Cirebon',
			'siswa_id' => $a->id
			));

		App\Wali::create(array(
			'nama'  => 'abdel',
			'alamat' => 'Jl.Peda',
			'siswa_id' => $b->id
			));


		$this->command->info('Data mahasiswa dan wali telah diisi!');













    }
}
