<?php

$conn = mysqli_connect("localhost", "root", "", "ksr_pmi");

if(!$conn){
    die("Koneksi gagal : " . mysqli_connect_error());
}

?>