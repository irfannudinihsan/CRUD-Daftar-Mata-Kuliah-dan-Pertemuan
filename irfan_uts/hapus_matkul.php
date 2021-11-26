<?php include "config.php" ;

if(isset($_GET["id_matkul"])){

    $id_matkul = $_GET["id_matkul"];


    $query = "DELETE FROM matkul WHERE id_matkul='$id_matkul'";
    $result = mysqli_query($koneksi,$query);

    if(!$result){
        die("gagal menghapus data".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    }

}
header("location:index.php");


?>