<!DOCTYPE html>
<html>
<head>
	<title>Bonus</title>
</head>
<body>
	<h3><center>BONUS</center></h3>
	@foreach ($mahasiswa as $temp)
					<li><strong>Nama :</strong>{{$temp->nama}}</li>
					<li><strong>Nama Wali : </strong>{{$temp->wali->nama}}</li>
				<hr/>
					<li><strong>Alamat Wali : </strong>{{$temp->wali->alamat}}</li>
				<hr/>
					<li><strong>Nama Dosen : </strong>{{$temp->dosen->nama}}</li>
				<hr/>
					<li><strong>Jurusan :</strong>{{$temp->jurusan->nama_jurusan}} </li>
				<hr/>
					<li><strong>Mata Pelajaran : </strong><small>
						@foreach($temp->mata_kuliah as $tampung)
						{{$tampung->nama_matkul}}
						@endforeach
					</small></li>
				<hr/>

@endforeach
</body>
</html>