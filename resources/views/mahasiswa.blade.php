<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name='viewport' content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<title>Data Mahasiswa</title>
</head>
<body>

	<div class="container">
		<div class="card-header text-center">
			CRUD DATA MAHASISWA
		</div>
		<div class="card-body">
			<a href="/mahasiswa/tambah" class="btn btn-primary">Input Data Mahasiswa</a><br><br>
			<table class="table table-bordered table-hover table-stripped">
				<thead>
					<tr>
						<th>NIM</th>
						<th>NAMA</th>
						<th>ALAMAT</th>
						<th>AKSI</th>
					</tr>
				</thead>
				<tbody>
					@foreach($mahasiswa as $m)
					<tr>
						<td>{{ $m->nim}}</td>
						<td>{{ $m->nama}}</td>
						<td>{{ $m->alamat}}</td>
						<td>
							<a href="/mahasiswa/edit/{{ $m->id }}" class="btn btn-warning">EDIT</a>
							<a href="/mahasiswa/hapus/{{ $m->id }}" class="btn btn-danger">HAPUS</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>