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
    <style>
        table{
            width: 100px;
        }
     .container {
         height: auto;
     }
    </style>
</head>
<body>

<div class="container w-75 responsive" style="color: #8E05C2; top:0px; bottom:0px;">
    <div class="row "><img style="width: 150px; margin:auto;" src="amikom.png" alt=""></div>
    <div class="row" id="daftarmatakuliah"><div class=" fs-1 fw-bold text-center " style="color:white">Data Mata Kuliah</div></div>
    <div class="row mb-1"><a href="tambah_matkul.php"> <button class="display-1 btn btn-outline-primary" style="background-color:black;color:white;">Tambah Mata Kuliah</button></a></div>
    <div class="row">
        <table  class="table table-responsive table-hover " align="center" style="background-color:#3E00FF ;color:white;margin-left:10px;">
 
 <thead>
     <tr>
         <th>No</th>
         <th>Kode</th>
         <th>Mata_Kuliah</th>
         <th>Dosen</th>
         <th>Deskripsi</th>
         <th>Edit/Hapus</th>
         <th>Pertemuan</th>
     </tr>
 </thead>
 <tbody>
 <?php
				$query = "SELECT * FROM matkul ORDER BY id_matkul ASC";
				$result = mysqli_query($koneksi,$query);
					$no = 1;
					while($data = mysqli_fetch_assoc($result)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['kode_matkul'].'</td>
							<td>'.$data['nama_matkul'].'</td>
							<td>'.$data['dosen_matkul'].'</td>
							<td>'.$data['deskripsi_matkul'].'</td>
							<td>
                            <a href="edit_matkul.php?id_matkul='.$data['id_matkul'].'" class="btn btn-secondary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                            <a href="hapus_matkul.php?id_matkul='.$data['id_matkul'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="bi bi-trash-fill"></i></a>
                            </td>
                            <td><a href="tampilan_pertemuan.php?id_matkul='.$data['id_matkul'].'"><i class="bi bi-people-fill" style="color:white;"></i></a></td>
						</tr>
						';
						$no++;
					}
				?>
 </tbody>
 </table></div>
    </div>
</div>
    
</body>
</html>
