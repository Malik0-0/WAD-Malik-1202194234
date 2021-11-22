    <?php
    include('Malik_Config.php');
    if (isset($_POST["tambahdatabuku"])){
        $judul_buku = $_POST["judulbuku"];
        $penulis_buku = $_POST["penulis"];
        $tahunterbit_buku = $_POST["tahunterbit"];
        $deskripsi_buku = $_POST["deskripsi"];
        $bahasa_buku = $_POST["Bahasa"];
        $tag_buku = implode(", ",$_POST["Tag"]);
        $gambar_buku = $_FILES["gambar_buku"]["name"];

        move_uploaded_file($_FILES["gambar_buku"]["tmp_name"],$gambar_buku);
        $query = "INSERT INTO buku_table (judul_buku,penulis_buku,tahun_terbit,deskripsi,bahasa,tag,gambar) VALUES ('$judul_buku','$penulis_buku','$tahunterbit_buku','$deskripsi_buku','$bahasa_buku','$tag_buku','$gambar_buku')";
            mysqli_query($conn, $query);
            header('location: Malik_Home.php');
    }
