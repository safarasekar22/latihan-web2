<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota di Indonesia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <header class="bg-primary text-white text-center py-5">
        <h1 class="display-4">Kota di Indonesia</h1>
    </header>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- Sidebar Navigation -->
            <aside class="col-md-3">
                <nav>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="active">Jakarta</a></li>
                        <li class="list-group-item"><a href="#">Depok</a></li>
                        <li class="list-group-item"><a href="#">Surabaya</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="col-md-9 bg-white p-4 rounded shadow">
                <h2>Jakarta</h2>
                <form method="post" action="" class="mb-4">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor HP:</label>
                        <input type="number" name="no_hp" id="no_hp" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ttl" class="form-label">TTL:</label>
                        <input type="date" name="ttl" id="ttl" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_tugas_1" class="form-label">Nilai Tugas 1:</label>
                        <input type="number" name="nilai_tugas_1" id="nilai_tugas_1" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_tugas_2" class="form-label">Nilai Tugas 2:</label>
                        <input type="number" name="nilai_tugas_2" id="nilai_tugas_2" class="form-control" required>
                    </div>
                    <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                </form>
                
                <?php if (isset($_POST['kirim'])): ?>
                    <div class="alert alert-info">
                        <strong>Nama:</strong> <?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?><br>
                        <strong>Nomor HP:</strong> <?php echo isset($_POST['no_hp']) ? $_POST['no_hp'] : ''; ?><br>
                        <strong>TTL:</strong> <?php echo isset($_POST['ttl']) ? $_POST['ttl'] : ''; ?><br>
                        <strong>Nilai Tugas 1:</strong> <?php echo isset($_POST['nilai_tugas_1']) ? (float) $_POST['nilai_tugas_1'] : 0; ?><br>
                        <strong>Nilai Tugas 2:</strong> <?php echo isset($_POST['nilai_tugas_2']) ? (float) $_POST['nilai_tugas_2'] : 0; ?><br>
                        <strong>Total Nilai (Tugas 1 + Tugas 2):</strong> <?php echo (isset($_POST['nilai_tugas_1']) ? (float)$_POST['nilai_tugas_1'] : 0) + (isset($_POST['nilai_tugas_2']) ? (float) $_POST['nilai_tugas_2'] : 0); ?><br>
                    </div>
                <?php endif; ?>
            </main>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; 2024 Kota di Indonesia - Contoh Desain Modern</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>