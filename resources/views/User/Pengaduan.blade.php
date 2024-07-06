<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5 position-relative">
        <h1 class="mb-4">Pengaduan Fasilitas Desa Kalipucang</h1>
        
        <!-- Tombol Kembali -->
        <a href="/home" class="btn btn-secondary back-button">Kembali</a>
<!-- Form Pengaduan -->
<div class="card mb-4">
    <div class="card-header">
        <h2>Isi Pengaduan</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('pengaduan') }}" enctype="multipart/form-data">
            @csrf <!-- Token CSRF -->
            <div class="form-group">
                <label for="isi_pengaduan">Isi Pengaduan</label>
                <textarea class="form-control" id="isi_pengaduan" name="isi_pengaduan" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="upload_gambar">Upload Gambar</label>
                <input type="file" class="form-control-file" id="upload_gambar" name="upload_gambar" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
        </form>
    </div>
</div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
