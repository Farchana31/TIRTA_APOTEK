<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah barang</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah barang</h3>
            </div>
            <div class="card-body">
                <form action="proses_tambah_barang.php" method="post">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang: </label>
                        <input type="text" id="nama_barang" name="nama_barang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi: </label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga: </label>
                        <input type="integer" id="harga" name="harga" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label"> foto: </label>
                        <input type="text" id="foto" name="foto" class="form-control" required>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary">Tambah Barang</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
