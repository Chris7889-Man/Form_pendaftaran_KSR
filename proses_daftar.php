<?php
include 'koneksi.php';

if(isset($_POST['submit'])){

    $nama           = trim($_POST['nama']);
    $nim            = trim($_POST['nim']);
    $angkatan       = trim($_POST['angkatan']);
    $whatsapp       = trim($_POST['whatsapp']);

    if(!preg_match('/^\+62[0-9]{9,13}$/', $whatsapp)){
        echo "
        <script>
            alert('Nomor WhatsApp harus diawali +62 dan berisi 11-15 digit angka. Contoh: +6281234567890');
            window.location.href = 'index.php';
        </script>
        ";
        exit;
    }
    $program_studi  = trim($_POST['program_studi']);
    $jenis_kelamin  = trim($_POST['jenis_kelamin']);

    $stmt = mysqli_prepare($conn, "INSERT INTO pendaftar(
        nama,
        nim,
        angkatan,
        whatsapp,
        program_studi,
        jenis_kelamin
    ) VALUES (?, ?, ?, ?, ?, ?)");

    mysqli_stmt_bind_param(
        $stmt,
        "ssssss",
        $nama,
        $nim,
        $angkatan,
        $whatsapp,
        $program_studi,
        $jenis_kelamin
    );

    $query = mysqli_stmt_execute($stmt);

    if($query){

        echo "
        <script>
            alert('Pendaftaran berhasil!');
            window.location.href = 'https://chat.whatsapp.com/HLboTsAvAm0KnkifoJsQK2';
        </script>
        ";

    } else {

        echo "
        <script>
            alert('Pendaftaran gagal!');
            window.location.href = 'index.php';
        </script>
        ";
    }
}
?>
