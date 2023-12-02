<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $film['title']; ?> Seat Selector</title>
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

    <div class="container">
        <br>
        <div class="text-center">
            <h2>Seat Selection : <?php echo $film['title']; ?> Movie</h2>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="seat-selection">
                    <form method="post" action="/pay">
                    <input type="hidden" name="bioskopid" value="<?= $bioskop['id']; ?>">
                    <input type="hidden" name="filmid" value="<?= $film['id']; ?>">
                    <input type="hidden" name="jadwalid" value="<?= $jadwal['id']; ?>">
                        <?php
                        $rows = 6;
                        $columns = 6;

                        for ($i = 1; $i <= $rows; $i++) {
                            echo '<div class="row">';
                            for ($j = 1; $j <= $columns; $j++) {
                                echo '<div class="col-md-2">';
                                echo '<label>';
                                echo '<input type="checkbox" name="seats[]" value="' . $i . '-' . $j . '"> Seat ' . $i . '-' . $j;
                                echo '</label>';
                                echo '</div>';
                            }
                            echo '</div>';
                        }
                        ?>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Confirm Selection</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        </div>
    </div>

    

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>