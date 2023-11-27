<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $film[0]['title']; ?> Schedule</title>
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

    <div class="container" style="height: 70vh;">
        <div class="row h-100 align-items-center no-gutters">
            <div class="col-md-6 mr-24"> <!-- Add "pl-4" class for left padding -->
                <img src="<?php echo $film[0]['picture_url']; ?>" alt="Film Poster" style="width: 100%; max-width: 300px; height: auto;" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h1><?php echo $film[0]['title']; ?></h1>
                <h3>Rating : <?php echo $film[0]['rating']; ?>/10</h3>

                <p><?php echo $film[0]['description']; ?></p>
                
                <!-- TODO : action /submit -->
                <form action="<?= site_url('/pesan/'); ?>" method="get">
                    <input type="hidden" name="bioskopid" value="<?= $idbioskop; ?>">
                    <input type="hidden" name="filmid" value="<?= $film[0]['id']; ?>">
                    <div class="form-group">
                        <select class="form-control" name="jadwalid">
                            <option value="" selected disabled>Pilih jadwal</option>
                            <?php foreach ($jadwal as $data) { ?>
                                <?php if ($data['film_id'] === $film[0]['id']) { ?>
                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['tanggal-jam']; ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success">Pesan Tiket</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>