<?php 
    include "config.php";

    if(isset($_GET['id_matkul'])) {
        
        $id_matkul = $_GET["id_matkul"];


        $query = "SELECT * FROM matkul WHERE id_matkul='$id_matkul'";
        $result = mysqli_query($koneksi,$query);

        if(!$result) {
            die("data gagal di edit". mysqli_error($koneksi).
            " - ". mysqli_errno($koneksi));
        }
        $data = mysqli_fetch_assoc($result);
        $kode_matkul	= $data['kode_matkul'];
        $nama_matkul	= $data['nama_matkul'];
        $dosen_matkul	= $data['dosen_matkul'];
        $deskripsi_matkul= $data['deskripsi_matkul'];
    } else {
        /* header("location:tampilan.php"); */
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		body{
		background-color:#170055 ;
	}
	</style>
</head>
<body>
<?php include "navbar.php" ?>
<div  style="margin: 100px auto;">
<div class="row"><div class=" fs-1 fw-bold text-center" style="color:white">Edit Mata Kuliah</div></div>
<div class="container  w-25 " style="border-radius: 15px;background-color: #3E00FF;" > 
<form action="edit_proses_matkul.php" class="w-100" method="POST">
			<div class="item form-group  mt-2 pt-2">
				<div class="col-md-6 col-sm-6">
					<input type="hidden" name="id_matkul" class="form-control" value="<?php echo $id_matkul; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="mt-2 pt-2" style="color:white" >Kode Mantul</label>
				<div>
					<input type="text" name="kode_matkul" class="form-control" value="<?php echo  $kode_matkul; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="mt-2 pt-2" style="color:white">Nama Mata Kuliah</label>
				<div >
					<input type="text" name="nama_matkul" class="form-control" value="<?php echo  $nama_matkul; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="mt-2 pt-2" style="color:white">Dosen</label>
				<div >
					<input type="text" name="dosen_matkul" class="form-control" value="<?php echo  $dosen_matkul; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="mt-2 pt-2" style="color:white">Deskripsi</label>
				<div >
					<input type="text" name="deskripsi_matkul" class="form-control" value="<?php echo  $deskripsi_matkul; ?>" required>
				</div>
			</div>
			<div class="item form-group mt-2 pb-2">
				<div >
					<input type="submit" name="edit" class="btn btn-success" value="Simpan">
				</div>
			</div>
		</form>
</div>
</div>
<?php include "footer.php" ?>

</body>
</html>