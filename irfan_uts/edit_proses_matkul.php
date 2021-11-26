<?php 

include "config.php";


if(isset($_POST['edit'])){

    $id_matkul = $_POST['id_matkul'];
    $kode_matkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $dosen_matkul = $_POST['dosen_matkul'];
    $deskripsi_matkul = $_POST['deskripsi_matkul'];


    $query  = "UPDATE matkul SET ";
    $query .= "kode_matkul = '$kode_matkul', nama_matkul = '$nama_matkul', dosen_matkul = '$dosen_matkul', deskripsi_matkul = '$deskripsi_matkul' ";
    $query .= "WHERE id_matkul = '$id_matkul'";


    $result = mysqli_query($koneksi,$query);

    if(!$result) {
        die("gagal edit data". mysqli_error($koneksi).
        "-".mysqli_errno($koneksi));
    }

}
header("location:index.php");
?>