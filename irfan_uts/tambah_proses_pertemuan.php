<?php include "config.php";

if(isset($_POST['submit'])) {

    $pertemuan_ke = $_POST['pertemuan_ke'];
    $judul_pertemuan = $_POST['judul_pertemuan'];
    $deskripsi_pertemuan = $_POST['deskripsi_pertemuan'];
    $id_matkul = $_POST['id_matkul'];

   
    /* kode matkul */

    $query = "INSERT INTO pertemuan VALUES (NULL, '$id_matkul', '$pertemuan_ke','$judul_pertemuan','$deskripsi_pertemuan')";
    $result = mysqli_query($koneksi,$query);

    if(!$result) {
        die ('gagal menambakan data'.mysqli_errno($koneksi).
        "-".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='tampilan_pertemuan.php?id_matkul=$id_matkul';</script>";
    }
}

?>

