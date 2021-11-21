<?php
include('Malik_Config.php');
if (isset($_POST["perbarui"])){
    $id_buku = $_POST["id_buku"];
    $judul_buku = $_POST["judulbuku"];
    $penulis_buku = $_POST["penulis"];
    $tahunterbit_buku = $_POST["tahunterbit"];
    $deskripsi_buku = $_POST["deskripsi"];
    $bahasa_buku = $_POST["Bahasa"];
    $tag_buku = implode(", ",$_POST["Tag"]);
    $gambar_buku = $_FILES["gambar_buku"]["name"];
    
    move_uploaded_file($_FILES["gambar_buku"]["tmp_name"],$gambar_buku);
    $query = "UPDATE buku_table SET judul_buku='$judul_buku', penulis_buku='$penulis_buku',tahun_terbit='$tahunterbit_buku',deskripsi='$deskripsi_buku',bahasa='$bahasa_buku',tag='$tag_buku', gambar='$gambar_buku' WHERE id_buku='$id_buku'";
            mysqli_query($conn, $query);
            header("location:Malik_Detail-Buku.php?id_buku=" . $id_buku);
}