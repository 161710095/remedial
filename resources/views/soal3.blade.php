<!DOCTYPE html>
<html>
<head>
	<title>soal3</title>
</head>
<body>
	<h3><center>soal 3 many to many</center></h3>
	@foreach ($mahasiswa as $temp)
					<li><strong>Nama Mahasiswa :</strong>{{$temp->nama}}</li>
					<li><strong>Nama Jurusan : </strong>{{$temp->jurusan->nama_jurusan}}</li><br>
				<hr/>
@endforeach
</body>
</html>