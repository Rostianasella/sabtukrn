<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
	@foreach($orangtua as $data)
	Nama Ibu : {{ $data->nama_ibu }}</br>
	Nama Ayah : {{ $data->nama_ayah }}</br>
	Umur Ibu : {{ $data->umur_ibu }}</br>
	Umur Ayah : {{ $data->umur_ayah }}</br>
	Nama anak :
	@foreach($data ->anak as $key)
	<li>{{$key->nama}}</li>
	@endforeach
	<hr>
	@endforeach

</body>
</html>