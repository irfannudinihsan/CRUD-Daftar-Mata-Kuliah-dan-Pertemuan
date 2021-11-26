<?php include 'config.php' ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<style>
	body{
		background-color:#170055 ;
	}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "navbar.php" ?>
<div class="container w-auto" style="color: #8E05C2;">
    <div class="row mt-5"><img style="width: 200px; margin:auto;" src="amikom.png" alt=""></div>
    <div class="row" id="daftarkuliah"><div class=" fs-1 fw-bold text-center " style="color:white">Data Pertemuan</div></div>
    <div class="row mb-1"><a href="tambah_pertemuan.php"> <button class="display-1 btn btn-outline-primary" style="background-color:black;color:white;margin-left:150px;">Tambah Pertemuan</button></a></div>
    <div class="row">
        <table  class="table table-responsive table-hover  w-75  " align="center" style="background-color:#3E00FF ;color:white;">
 
 <thead>
     <tr>
         <th>No</th>
         <th>pertemuan ke</th>
         <th>judul Pertemuan</th>
         <th>Deskripsi</th>
         <th>Edit/Hapus</th>
     </tr>
 </thead>
 <tbody>
 <?php
				
                $id=$_GET['id_matkul'];
                $query = "SELECT * FROM pertemuan WHERE id_matkul='$id' ORDER BY id_pertemuan ASC ";
				$result = mysqli_query($koneksi,$query);
					$no = 1;
					while($data = mysqli_fetch_assoc($result)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['pertemuan_ke'].'</td>
							<td>'.$data['judul_pertemuan'].'</td>
							<td>'.$data['deskripsi_pertemuan'].'</td>
							<td>
                            <a href="edit_pertemuan.php?id_pertemuan='.$data['id_pertemuan'].'&id_matkul='.$id.'" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                            <a href="hapus_pertemuan.php?id_pertemuan='.$data['id_pertemuan'].'&id_matkul='.$id.'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="bi bi-trash-fill"></i></a>
                            </td>
						</tr>
						';
						$no++;
					}
				?>
                
 </tbody>
 </table></div>
 <div class="row mb-1"><a href="index.php"> <button class="display-1 btn btn-outline-primary" style="background-color:black;color:white;margin-left:150px;">Kembali</button></a></div>
    </div>
    
</div>
<?php include "footer.php"?>
    
</body>
</html>
