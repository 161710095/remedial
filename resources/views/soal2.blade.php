<!DOCTYPE html>
<html>
<head>
	<title>soal2</title>
</head>
<body>
	<h3><center>soal 2 one to one</center></h3>
	@foreach ($wali as $temp)
					<li><strong>Nama Wali : </strong>{{$temp->nama}}</li>
					<li><strong>Nama Mahasiswa : </strong>{{$temp->mahasiswa->nama}}</li>
				<hr/>
@endforeach
</body>
</html>