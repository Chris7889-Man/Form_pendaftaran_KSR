<?php
include 'auth.php';
include '../koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM pendaftar ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>

        body {
            background: #f4f4f4;
            font-family: Poppins, sans-serif;
        }

        .navbar-custom {
            background: linear-gradient(135deg, #b30000, #700000);
        }

        .table-card {
            border-radius: 20px;
            overflow: hidden;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            KSR PMI ADMIN
        </a>

        <div>
            <a href="export_excel.php" class="btn btn-success btn-sm">
                Export Excel
            </a>
            <a href="logout.php" class="btn btn-light btn-sm">
                Logout
            </a>
        </div>

    </div>

</nav>
<div class="container py-5">
    <div class="card table-card shadow border-0">
        <div class="card-body">
            <h3 class="mb-4 text-danger fw-bold">
                Data Pendaftar KSR PMI
            </h3>
            <div class="table-responsive">
                <table id="table" class="table table-bordered table-striped align-middle">
                    <thead class="table-danger">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Angkatan</th>
                            <th>WhatsApp</th>
                            <th>Program Studi</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $no = 1;
                        while($d = mysqli_fetch_array($data)) :
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

                        <?php endwhile; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#table');
</script>

</body>
</html>