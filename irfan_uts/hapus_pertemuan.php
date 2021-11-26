<?php include "config.php" ;

if(isset($_GET["id_pertemuan"])){

    $id_pertemuan = $_GET["id_pertemuan"];
    $id_matkul = $_GET["id_matkul"];
   
    $query = "DELETE FROM pertemuan WHERE id_pertemuan='$id_pertemuan'";
    $result = mysqli_query($koneksi,$query);

    if(!$result){
        die("gagal menghapus data".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }

}
header("location:tampilan_pertemuan.php?id_matkul=$id_matkul");


?>