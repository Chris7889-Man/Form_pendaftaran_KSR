<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSR PMI UNIT 108 UNDIPA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="overlay"></div>
<div class="main-wrapper">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="card form-card border-0 shadow-lg">
                    <div class="card-body p-lg-5 p-4">
<div class="text-center mb-5">
                            <img
                                src="img/logo.PNG" class="logo mb-3" alt="Logo Universitas DIPA Makassar">
                            <h1 class="title">
                                KSR-PMI UNIT 108 UNDIPA
                            </h1>
                            <p class="subtitle">
                                SHARING SESSION DEBUG YOUR MINE
                            </p>
                        </div>
                        <form action="proses_daftar.php" method="POST">

                            <div class="mb-4">
                                <label class="form-label">
                                    Nama
                                </label>
                                <input
                                    type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">
                                        NIM
                                    </label>
                                    <input
                                        type="text" name="nim" id="nim" class="form-control" placeholder="Contoh : 245001" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label class="form-label">
                                        Angkatan
                                    </label>
                                    <input
                                        type="text" name="angkatan" id="angkatan" class="form-control" readonly placeholder="Otomatis">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">
                                    Nomor WhatsApp Aktif
                                </label>
                                <input
                                    type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="+6281234567890" pattern="^\+62[0-9]{9,13}$" title="Nomor WhatsApp harus diawali +62 dan berisi 11-15 digit angka (contoh: +6281234567890)" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">
                                    Program Studi
                                </label>
                                <select
                                    id="program_studi" name="program_studi" required>
                                    <option style="color:white;" value="">-- Pilih Program Studi --</option>
                                    <option>Teknik Informatika</option>
                                    <option>Sistem Informasi</option>
                                    <option>Rekayasa Perangkat Lunak</option>
                                    <option>Bisnis Digital</option>
                                    <option>Kewirausahaan</option>
                                    <option>Manajemen Informatika</option>
                                    <option>Magister Informatika</option>
                                </select>
                            </div>
                           <div class="mb-4">
                                <label class="form-label d-block mb-3">
                                    Jenis Kelamin
                                </label>
                                <div class="gender-wrapper">
                                    <label class="gender-option">
                                        <input
                                            type="radio" name="jenis_kelamin" value="Laki-Laki" required>
                                        <span class="gender-btn">
                                            Laki-Laki
                                        </span>
                                    </label>
                                    <label class="gender-option">
                                        <input
                                            type="radio" name="jenis_kelamin" value="Perempuan" required>
                                        <span class="gender-btn">
                                            Perempuan
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn submit-btn w-100">
                                DAFTAR SEKARANG
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    new TomSelect("#program_studi", {
        create: false,
        placeholder: "-- Pilih Program Studi --",
        sortField: {
            field: "text",
            direction: "asc"
        },
        onInitialize: function () {
            this.control_input.readOnly = true;
        }
    });
</script>

<script src="script.js"></script>
</body>
</html>