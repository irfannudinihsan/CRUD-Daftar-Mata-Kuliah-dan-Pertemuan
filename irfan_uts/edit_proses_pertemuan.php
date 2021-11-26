<?php 

include "config.php";


if(isset($_POST['edit'])){
    $id_matkul = $_POST['id_matkul'];
    $id_pertemuan = $_POST['id_pertemuan'];
    $pertemuan_ke = $_POST['pertemuan_ke'];
    $judul_pertemuan = $_POST['judul_pertemuan'];
    $deskripsi_pertemuan = $_POST['deskripsi_pertemuan'];


    $query  = "UPDATE pertemuan SET ";
    $query .= "pertemuan_ke = '$pertemuan_ke', judul_pertemuan = '$judul_pertemuan', deskripsi_pertemuan = '$deskripsi_pertemuan'";
    $query .= "WHERE id_pertemuan = '$id_pertemuan'";


    $result = mysqli_query($koneksi,$query);

    if(!$result) {
        die("gagal edit data". mysqli_error($koneksi).
        "-".mysqli_errno($koneksi));
    }

}
header("location:tampilan_pertemuan.php?id_matkul=$id_matkul");
?>