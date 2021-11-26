<?php include "config.php" ?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
	body{
		background-color:#170055 ;
	}
</style>
</head>
<body>
<?php include "navbar.php" ?>
	<div style="margin: 100px auto;">
	<div class="row"><div class=" fs-1 fw-bold text-center" style="color:white">Tambah Mata Kuliah</div></div>
	<div class="container  w-25 " style="border-radius: 15px;background-color: #3E00FF;"  >

			<form action="tambah_proses_matkul.php" class="w-100 " method="POST">
			<div class="item form-group  mt-2 pt-2">
				<label style="color:white">Kode Mata Kuliah</label>
				<div>
					<input type="text" name="kode_matkul" class="form-control" placeholder="contoh: DT170" required>
				</div>
			</div>
			<div class="item form-group  mt-2 pt-2">
				<label style="color:white">Nama Mata Kuliah</label>
				<div>
					<input type="text" name="nama_matkul" class="form-control" placeholder="contoh: Bahasa Indonesia " required>
				</div>
			</div>
			<div class="item form-group  mt-2 pt-2">
				<label style="color:white">Nama Dosen</label>
				<div>
					<input type="text" name="dosen_matkul" class="form-control" placeholder="contoh: Budi" required>
				</div>
			</div>

			<div class="item form-group mt-2 pb-2">
				<label  style="color:white">Deskripsi</label>
				<div>
					<input type="text" name="deskripsi_matkul" class="form-control" placeholder="contoh: mempelajari tentang web" required>
				</div>
			</div>
            <div class="item form-group mt-2 pb-2 d-flex flex-row">
				<div class="col-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan" >
			</div>
			<div class="col-6">
			<a href="tampilan_matkul.php" class="btn btn-secondary">Kembali</a>
			</div>
			
            </div>
			
		</form>
	</div>
	</div>
		<?php include "footer.php" ?>
</body>
</html>