
<?php include "config.php";

if(isset($_POST['submit'])) {

    $kode_matkul	= $_POST['kode_matkul'];
    $nama_matkul	= $_POST['nama_matkul'];
    $dosen_matkul	= $_POST['dosen_matkul'];
    $deskripsi_matkul= $_POST['deskripsi_matkul'];

    $query = "INSERT INTO matkul VALUES (NULL,'$kode_matkul', '$nama_matkul', ' $dosen_matkul','$deskripsi_matkul')";
    $result = mysqli_query($koneksi,$query);

    if(!$result) {
        die ('gagal menambakan data'.mysqli_errno($koneksi).
        "-".mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }
}

?>