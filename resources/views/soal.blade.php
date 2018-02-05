<!DOCTYPE html>
<html>
<head>
	<title>soal1</title>
</head>
<body>
	<h3><center>soal 1 one to many</center></h3>
	@foreach ($dosen as $temp)
					<li><strong>Nama Dosen : </strong>{{$temp->nama}}</li><br>
					@foreach ($temp->mahasiswa as $data)
					<li><strong>Nama Mahasiswa : </strong>{{$data->nama}}</li>
				<hr/>
			@endforeach
@endforeach
</body>
</html>