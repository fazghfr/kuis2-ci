<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Add Bootstrap navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <form method="get" action="/about">
                        <button type="submit" class="nav-link btn btn-link">About</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form method="get" action="/">
                        <button type="submit" class="nav-link btn btn-link"><strong>eCinema</strong><span class="sr-only">(current)</span></button>
                    </form>
                </li>
                <li class="nav-item">
                    <form method="get" action="#">
                        <button type="submit" class="nav-link btn btn-link">Contact</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Add form -->
    <div class="container mt-5">
        <div class="text-center">
            <h1>One Step Closer! Fill this first</h1>
            <br>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="/save">
                    <input type="hidden" name="bioskop" value="<?php echo $bioskop['id']; ?>">
                    <input type="hidden" name="film" value="<?php echo $film['id']; ?>">
                    <input type="hidden" name="jadwal" value="<?php echo $jadwal['id']; ?>">
                    <input type="hidden" name="jumlah_tiket" value="<?php echo $jumlah_tiket; ?>">
                    <input type="hidden" name="paymentMethod" value="<?php echo $paymentMethod; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
