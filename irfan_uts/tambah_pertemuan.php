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
	<?php
		$query = "SELECT * FROM matkul";
		$result = mysqli_query($koneksi,$query);
		
	?>
	<div style="margin: 100px auto;">
	<div class="row"><div class=" fs-1 fw-bold text-center" style="color:white">Tambah Pertemuan</div></div>
	<div class="container  w-25 " style="border-radius: 15px;background-color: #3E00FF;"  >

			<form action="tambah_proses_pertemuan.php" class="w-100 " method="POST">
			<div class="item form-group  mt-2 pt-2">
				<label style="color:white">Pertemuan Ke</label>
				<div>
					<input type="text" name="pertemuan_ke" class="form-control" placeholder="contoh: Pertemuan ke-1 " required>
				</div>
			</div>
			

			<div class="item form-group mt-2 pb-2">
				<label  style="color:white">Judul Pertemuan</label>
				<div>
					<input type="text" name="judul_pertemuan" class="form-control" placeholder="contoh: function di PHP" required>
				</div>
			</div>
			<div class="item form-group mt-2 pb-2">
				<label  style="color:white">Deskripsi Pertemuan</label>
				<div>
					<input type="text" name="deskripsi_pertemuan" class="form-control" placeholder="contoh: blablabla" required>
				</div>
			</div>

            <div class="item form-group  mt-2 pt-2">
			<label  style="color:white">Pilih Mata Kuliah</label>
			<select class="form-select" id="inputGroupSelect01" name="id_matkul">
				<option selected>Pilih</option>
				<?php while($data = mysqli_fetch_assoc($result)) {?>
				<option value="<?=$data['id_matkul']?>"><?=$data['nama_matkul']?></option>
				<?php } ?>
			</select>
			</div>
            <div class="item form-group mt-2 pb-2 d-flex flex-row">
				<div  class="col-3">
					<input type="submit" name="submit" class="btn btn-primary" value="simpan">
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