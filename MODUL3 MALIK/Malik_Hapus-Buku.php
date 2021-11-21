<?php
include('Malik_Config.php');
$id_buku = $_GET ['id_buku'];
mysqli_query($conn,"delete from buku_table where id_buku = '$id_buku'");
header("location:Malik_Home.php");