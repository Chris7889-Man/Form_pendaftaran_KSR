<?php
include 'auth.php';
include '../koneksi.php';

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_pendaftar.xls");
?>

<table border="1">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Angkatan</th>
    <th>WhatsApp</th>
    <th>Program Studi</th>
    <th>Jenis Kelamin</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM pendaftar ORDER BY id DESC");

while($d = mysqli_fetch_array($data)){
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= htmlspecialchars($d['nama']); ?></td>
    <td><?= htmlspecialchars($d['nim']); ?></td>
    <td><?= htmlspecialchars($d['angkatan']); ?></td>
    <td><?= htmlspecialchars($d['whatsapp']); ?></td>
    <td><?= htmlspecialchars($d['program_studi']); ?></td>
    <td><?= htmlspecialchars($d['jenis_kelamin']); ?></td>
</tr>

<?php } ?>

</table>