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

        <header class="bg-dark text-white">
            <div class="container px-4 text-center">
                <br><br>
                <h1 class="fw-bolder"><?php echo $bioskop['nama']?></h1>
                <p class="lead">Providing Your Entertainment</p>
                <br><br><br>
            </div>
        </header>
        <!-- About section-->
        <br>
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-4 text-center">
                        <h2>Total Film</h2>
                        <p class="lead">Currently Active Showing <strong><?php echo $jumlah_film?></strong> movies.</p>
                        <p class="lead"></p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h2>Location</h2>
                        <p class="lead">You can visit this theatre at <strong><?php echo $bioskop['lokasi']?></strong>. You
                                        can also reserve your seat through our website</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Add Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
