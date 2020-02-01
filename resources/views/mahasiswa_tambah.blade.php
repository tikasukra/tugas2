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
		<div class="card mt-5">
			<div class="card-header tect-center">
				<strong>TAMBAH DATA MAHASISWA</strong>
			</div>
			<div class="card-body">
				<a href="/mahasiswa" class="btn btn-primary">KEMBALI</a><br>
				<br>

				<form method="post" action="/mahasiswa/store">
					
					{{ csrf_field() }}

					<div class="form-group">
						<label>NIM</label>
						<input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa">

						@if($errors->has('nim'))
						<div class='text-danger'>
							{{ $errors->first('nim')}}
						</div>
						@endif

					</div>

					<div class="form-group">
						<label>NAMA</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">

						@if($errors->has('nama'))
						<div class='text-danger'>
							{{ $errors->first('nama')}}
						</div>
						@endif
					</div>

					<div class="form-group">
						<label>ALAMAT</label>
						<input type="text" name="alamat" class="form-control" placeholder="Alamat Mahasiswa">

						@if($errors->has('alamat'))
						<div class='text-danger'>
							{{ $errors->first('alamat')}}
						</div>
						@endif
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-success" value="SIMPAN">
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>