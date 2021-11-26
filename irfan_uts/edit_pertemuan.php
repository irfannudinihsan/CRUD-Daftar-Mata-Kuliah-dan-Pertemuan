<?php 
    include "config.php";

    if(isset($_GET['id_pertemuan'])) {
        
        $id_pertemuan = $_GET["id_pertemuan"];
        


        $query = "SELECT * FROM pertemuan WHERE id_pertemuan='$id_pertemuan'";
        $result = mysqli_query($koneksi,$query);

        if(!$result) {
            die("data gagal di edit". mysqli_error($koneksi).
            " - ". mysqli_errno($koneksi));
        }
        $data = mysqli_fetch_assoc($result);
        $pertemuan_ke	= $data['pertemuan_ke'];
        $judul_pertemuan	= $data['judul_pertemuan'];
        $deskripsi_pertemuan	= $data['deskripsi_pertemuan'];
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
<div class="row"><div class=" fs-1 fw-bold text-center" style="color:white">Edit Pertemuan</div></div>
<div class="container  w-25 " style="border-radius: 15px;background-color: #3E00FF;" > 
<form action="edit_proses_pertemuan.php" class="w-100" method="POST">
			<input type="hidden"  name="id_matkul" value="<?=$id_matkul = $_GET["id_matkul"];?>">
			<div class="item form-group  mt-2 pt-2">
				<div class="col-md-6 col-sm-6">
					<input type="hidden" name="id_pertemuan" class="form-control" value="<?php echo $id_pertemuan; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="mt-2 pt-2" style="color:white" >Pertemuan Ke</label>
				<div>
					<input type="text" name="pertemuan_ke" class="form-control" value="<?php echo  $pertemuan_ke; ?>" >
				</div>
			</div>
			<div class="item form-group">
				<label class="mt-2 pt-2" style="color:white">Judul Pertemuan</label>
				<div >
					<input type="text" name="judul_pertemuan" class="form-control" value="<?php echo  $judul_pertemuan; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="mt-2 pt-2" style="color:white">Deskripsi</label>
				<div >
					<input type="text" name="deskripsi_pertemuan" class="form-control" value="<?php echo  $deskripsi_pertemuan; ?>" required>
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